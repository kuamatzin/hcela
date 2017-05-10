<?php

namespace HerramientasCela\Http\Controllers;

use HerramientasCela\Http\Requests\ReplacementRequest;
use HerramientasCela\Machine;
use HerramientasCela\Replacement;
use Illuminate\Http\Request;

class ReplacementController extends Controller
{

    public function index()
    {
        return view('replacements.index');
    }

    public function create()
    {
        return view('replacements.create');
    }

    public function store(ReplacementRequest $request)
    {   
        $file = $request->file('image')->store('replacements', 'public');
        $request['image'] = $file;
        Replacement::create($request->all());

        return redirect('refacciones/create');
    }
}
