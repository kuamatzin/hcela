<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Http\Requests;
use HerramientasCela\Http\Requests\MachineRequest;
use HerramientasCela\Machine;

class MachineController extends Controller
{

    public function index()
    {
        $machines = Machine::all();
        return view('machines.index', compact('machines'));
    }

    public function show($id)
    {
        $machine = Machine::findOrFail($id);
        return view('machines.show', compact('machine'));
    }

    public function create()
    {
        return view('machines.create');
    }

    public function store(MachineRequest $request)
    {
        dd($request->all());
        $request = $this->prepareData($request);
        Machine::create($request->all());

        return redirect('catalogo');
    }

    private function prepareData($request)
    {
        $request['characteristics'] = $request->caracteristicas;
        $request['specifications'] = $this->build_specifications_array($request);
        $request['photos'] = $this->getPhotos($request->photo);
        $request['user_guide'] = $request->file('user_guide_file')->store('users_guides', 'public');

        return $request;
    }

    private function getPhotos($photos){
        $array_photos = array();
        foreach ($photos as $key => $photo) {
            $file = $photo->store('machines_photos', 'public');
            array_push($array_photos, $file);
        }
        return $array_photos;
    }

    private function build_specifications_array($request)
    {
        $contador = 0;
        $specifications = array();
        if ($request->numero_especificaciones) {
            foreach ($request->numero_especificaciones as $key => $numero_especificacion) {
                $nombre = $request->nombres_especificaciones[$key];
                $descripciones_especificacion = array();
                for ($i=0; $i < $numero_especificacion; $i++) { 
                    array_push($descripciones_especificacion, $request->especificaciones[$contador]);
                    $contador = $contador + 1;
                }
                $specifications[$nombre] = $descripciones_especificacion;
            }
            return $specifications;
        }
        else {
            return [];
        }
    }

    public function edit($id)
    {
        $machine = Machine::findOrFail($id);

        return view('machines.edit', compact('machine'));
    }

    public function update($id)
    {
        dd("HOLA");
    }
}
