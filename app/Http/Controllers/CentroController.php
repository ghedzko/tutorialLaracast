<?php

namespace NotasSys\Http\Controllers;

class CentroController extends Controller
{
    
    public function index()
    {
        $centros = \NotasSys\Centro::all();
        
        return view('centros.index', compact('centros'));
    }

    
    public function create()
    {
        return view('centros.create');
    }

    
    public function store()
    {
        
        request()->validate([
                'numero' => 'required',
                'nombre'=> 'required',

        ]);
        \NotasSys\Centro::create(request(['numero','nombre']));
        
        return redirect('/centros');
   
    }

    
    public function show(\NotasSys\Centro $centro)
    {
        return view('centros.show',compact('centro'));
    }

   
    public function edit(\NotasSys\Centro $centro)
    {
        return view('centros.edit',compact('centro'));
    }

   
    public function update(\NotasSys\Centro $centro)
    {
        $centro->update(request(['numero','nombre']));
        return redirect('/centros');
    }

    
    public function destroy(\NotasSys\Centro $centro)
    {
        $centro->delete();
        return redirect('/centros');
    }
}
