<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Http\Requests\ReplacementEditRequest;
use HerramientasCela\Http\Requests\ReplacementRequest;
use HerramientasCela\Machine;
use HerramientasCela\Replacement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ReplacementController extends Controller
{

    public function index()
    {
        $refacciones = Replacement::all();
        return view('replacements.index', compact('refacciones'));
    }

    public function create()
    {
        return view('replacements.create');
    }

    public function store(ReplacementRequest $request)
    {   
        $file = $request->file('image')->store('replacements', 'public');
        $datos = $request->all();
        $datos['image'] = $file;
        Replacement::create($datos);

        return redirect('refacciones/create');
    }

    public function edit($id)
    {
        $replacement = Replacement::find($id);
        return view('replacements.edit', compact('replacement'));
    }

    public function update($id, ReplacementEditRequest $request)
    {
        $replacement = Replacement::find($id);
        $datos = $request->all();
        if ($request->image != null) {
            $file = $request->file('image')->store('replacements', 'public');
            $datos['image'] = $file;
        }
        $replacement->update($datos);

        return redirect('refacciones');
    }

    public function destroy($id)
    {
        Replacement::destroy($id);
    }
}
