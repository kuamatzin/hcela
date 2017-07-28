<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Machine;
use HerramientasCela\Mail\ContactoMail;
use HerramientasCela\Replacement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class PageController extends Controller
{
    public function index(){
        $carrito = \Request::cookie('carrito');
        if ($carrito) {
            if (!is_array($carrito)) {
                $carrito = explode(',', $carrito);
            }
        }
        else {
            $carrito = [];
        }
        $carrito = Replacement::find($carrito);

        $mandriles = Machine::where('machine_type', 1)->orderBy('position')->get();
        $trompos = Machine::where('machine_type', 2)->orderBy('position')->get();
        $tornillos = Machine::where('machine_type', 3)->orderBy('position')->get();
        $escuadradoras = Machine::where('machine_type', 4)->orderBy('position')->get();
        $circulares = Machine::where('machine_type', 5)->orderBy('position')->get();
        $trompos_herramientas = Machine::where('machine_type', 6)->orderBy('position')->get();
        $lijadoras = Machine::where('machine_type', 7)->orderBy('position')->get();
        $tornos = Machine::where('machine_type', 8)->orderBy('position')->get();
        $escoplos = Machine::where('machine_type', 9)->orderBy('position')->get();
        $cintas = Machine::where('machine_type', 10)->orderBy('position')->get();
        $husillos = Machine::where('machine_type', 11)->orderBy('position')->get();
        $sargentos = Machine::where('machine_type', 12)->orderBy('position')->get();

        $refacciones = [
            'Mandriles' => $refacciones_mandril = Replacement::mandril()->get(),
            'Trompo Botella' => $refacciones_mandril = Replacement::trompoBotella()->get(),
            'Sierra Cinta' => $refacciones_mandril = Replacement::sierraCinta()->get(),
            'Torno' => $refacciones_mandril = Replacement::torno()->get(),
            'Escoplo' => $refacciones_mandril = Replacement::escoplo()->get(),
            'Lijadora' => $refacciones_mandril = Replacement::lijadora()->get(),
            'Trompo' => $refacciones_mandril = Replacement::trompo()->get(),
            'Sierra Circular y Escuadradora' => $refacciones_mandril = Replacement::sierraCircularEscuadradora()->get(),
            'Motor' => $refacciones_mandril = Replacement::motor()->get()
        ];

        $keys = array_keys($refacciones);

        return view('page.index',  compact('mandriles', 'trompos', 'tornillos', 'escuadradoras', 'circulares', 'trompos_herramientas', 'lijadoras', 'tornos', 'escoplos', 'cintas', 'husillos', 'sargentos', 'carrito', 'refacciones', 'keys'));
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

        Mail::to('kuamatzin@gmail.com')->send(new ContactoMail($request->all()));

        return "Exito";
    }

    public function guardarCarritoCompra(Request $request)
    {
        $carrito = $request->cookie('carrito');
        //Ya existe cookie
        if ($carrito) {
            if (!is_array($carrito)) {
                $carrito = explode(',', $carrito);
            }
            if (!in_array($request->machine, $carrito)) {
                array_push($carrito, $request->machine);
                $carrito = implode(',', $carrito);
            }
        }
        else {
            $carrito = $request->machine;
        }

        //Sumatoria de precios

        $total_price = Replacement::find( explode(',', $carrito))->sum('price');
        
        return response()->json(['previousCookieValue' => Cookie::get('carrito'), 'total_price' => $total_price])->withCookie(cookie('carrito', $carrito));
    }

    public function quitarArticuloCarritoComptra(Request $request)
    {
        $carrito = $request->cookie('carrito');
        if (!is_array($carrito)) {
            $carrito = explode(',', $carrito);
        }
        if(($key = array_search($request->machine, $carrito)) !== false) {
            unset($carrito[$key]);
        }
        $total_price = Replacement::find( $carrito)->sum('price');

        return response()->json(['previousCookieValue' => Cookie::get('carrito'), 'total_price' => $total_price])->withCookie(cookie('carrito', $carrito));
    }
}
