<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Machine;
use HerramientasCela\Mail\ContactoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index(){
        $mandriles = Machine::where('machine_type', 1)->get();
        $trompos = Machine::where('machine_type', 2)->get();
        $sujecciones = Machine::where('machine_type', 3)->get();
        $escuadradoras = Machine::where('machine_type', 4)->get();
        $circulares = Machine::where('machine_type', 5)->get();
        $trompos = Machine::where('machine_type', 6)->get();
        $lijadoras = Machine::where('machine_type', 7)->get();
        $tornos = Machine::where('machine_type', 8)->get();
        $escoplos = Machine::where('machine_type', 9)->get();
        $cintas = Machine::where('machine_type', 10)->get();
        return view('page.index',  compact('mandriles', 'trompos', 'sujecciones', 'escuadradoras', 'circulares', 'trompos', 'lijadoras', 'tornos', 'escoplos', 'cintas'));
    }

    public function enviar_email(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'corp_name' => 'required',
            'state' => 'required',
            'city' => 'required',
            'phone' => 'required'
        ]);

        if ($validator->fails()) {
            return $validator->getMessageBag()->toArray();
        }

        Mail::to($request->email)->send(new ContactoMail($request->all()));

        return "Exito";
    }
}
