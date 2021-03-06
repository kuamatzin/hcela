<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Http\Requests;
use HerramientasCela\Http\Requests\MachineRequest;
use HerramientasCela\Http\Requests\MachineEditRequest;
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
        $request = $this->prepareData($request);
        Machine::create($request->all());

        return redirect('catalogo');
    }

    private function prepareData($request)
    {
        $request['characteristics'] = $request->caracteristicas == null ? [] : $request->caracteristicas;
        $request['specifications'] = $this->build_specifications_array($request);
        if ($request->photo) {
            $request['photos'] = $this->getPhotos($request->photo);
        }
        if ($request->sellable == null) {
            $request['sellable'] = false;
        }
        if ($request->user_guide_file) {
            $request['user_guide'] = $request->file('user_guide_file')->store('users_guides', 'public');
        }
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
                    $datos = array();
                    array_push($datos, $request->especificaciones[$contador]);
                    array_push($datos, $request->especificaciones_dos[$contador]);
                    if ($request->especificaciones_tres[$contador] != '') {
                        array_push($datos, $request->especificaciones_tres[$contador]);
                    }
                    if ($request->especificaciones_cuatro[$contador] != '') {
                        array_push($datos, $request->especificaciones_cuatro[$contador]);
                    }
                    if ($request->especificaciones_cinco[$contador] != '') {
                        array_push($datos, $request->especificaciones_cinco[$contador]);
                    }
                    if ($request->especificaciones_seis[$contador] != '') {
                        array_push($datos, $request->especificaciones_seis[$contador]);
                    }
                    array_push($descripciones_especificacion, $datos);
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

    public function update(MachineEditRequest $request, $machine_id)
    {
        $request = $this->prepareData($request);
        $machine = Machine::findOrFail($machine_id);
        $machine->update($request->all());
        return redirect('catalogo');
    }

    public function destroy($id)
    {
        Machine::destroy($id);
    }
}
