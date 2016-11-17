<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Machine;
use Illuminate\Http\Request;
use \Conekta as Conekta;
use \Conekta_Charge as Conekta_Charge;
use \Conekta_Error as Conekta_Error;

class PaymentController extends Controller
{
    public function processPayment(Request $request)
    {
        $product = Machine::findOrfail($request->product);
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
                    'name'=> 'Box of Cohiba S1s',
                    'description'=> 'Imported From Mex.',
                    'unit_price'=> 20000,
                    'quantity'=> 1
                  )
                )
              )
            ));
        } catch (Conekta_Error $e) {
            dd($e->message_to_purchaser);
        }

        dd($charge);
    }
}
