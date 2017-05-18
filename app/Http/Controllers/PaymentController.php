<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Machine;
use HerramientasCela\Mail\DatosDeCompra;
use HerramientasCela\Replacement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use \Conekta as Conekta;
use \Conekta_Charge as Conekta_Charge;
use \Conekta_Error as Conekta_Error;

class PaymentController extends Controller
{
    private function getItems($refacciones, $cantidades){
      $items = [];
      foreach ($refacciones as $key => $refaccion) {
        $item = [
          'name'=> $refaccion->name,
          'description'=> $refaccion->name,
          'unit_price'=> $refaccion->price,
          'quantity'=> $cantidades[$key]
        ];
        array_push($items, $item);
      }
      return $items;
    }

    private function getAmount($refacciones, $cantidades)
    {
      $amount = 0;
      foreach ($refacciones as $key => $refaccion) {
        $amount = $amount + ($refaccion->getOriginal('price') * $cantidades[$key]);
      }
      return $amount;
    }

    public function processPayment(Request $request)
    {
        $products = $request->products;
        $ids_products = array_pluck($products, 'id');
        $refacciones = Replacement::find($ids_products);
        $cantidades = $request->cantidades;

        $items = $this->getItems($refacciones, $cantidades);
        $amount = $this->getAmount($refacciones, $cantidades);

        Conekta::setApiKey("key_Gfo2v2sj9gqnKAZbBttuaA");
        try {
            $charge = Conekta_Charge::create(array(
              'description'=> 'Compra en Herramientascela.com',
              'reference_id'=> 1,
              'amount'=> $amount,
              'currency'=>'MXN',
              'card'=> $request->token,
              'details'=> array(
                'name'=> $request->buyer_name,
                'email'=> $request->buyer_email,
                'phone' => '2225630362',
                'line_items'=> $items
              )
            ));
        } catch (Conekta_Error $e) {
            return response()->json(['status' => $e->message_to_purchaser], 400);
        }

        //Enviar email al comprador
        Mail::to($request->buyer_email)->send(new DatosDeCompra($amount, $refacciones));

        //Eliminar carrito de compra de cookies
        Cookie::queue(Cookie::forget('carrito'));

        return response()->json(['status' => $charge->status], 200);
    }
}
