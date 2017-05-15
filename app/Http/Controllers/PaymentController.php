<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Machine;
use HerramientasCela\Replacement;
use Illuminate\Http\Request;
use \Conekta as Conekta;
use \Conekta_Charge as Conekta_Charge;
use \Conekta_Error as Conekta_Error;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $products = $request->products;
        $ids_products = array_pluck($products, 'id');
        $refacciones = Replacement::find($ids_products);

        Conekta::setApiKey("key_Gfo2v2sj9gqnKAZbBttuaA");
        try {
            $charge = Conekta_Charge::create(array(
              'description'=> $product->name,
              'reference_id'=> $product->id,
              'amount'=> 30000,
              'currency'=>'MXN',
              'card'=> $request->token,
              'details'=> array(
                'name'=> $request->buyer_name,
                'email'=> $request->buyer_email,
                'phone' => '2225630362',
                'line_items'=> array(
                  array(
                    'name'=> $product->name,
                    'description'=> $product->name,
                    'unit_price'=> 30000,
                    'quantity'=> 1
                  )
                )
              )
            ));
        } catch (Conekta_Error $e) {
            return response()->json(['status' => $e->message_to_purchaser], 400);
        }

        return response()->json(['status' => $charge->status], 200);
    }
}
