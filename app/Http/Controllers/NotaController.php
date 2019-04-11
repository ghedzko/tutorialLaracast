<?php

namespace NotasSys\Http\Controllers;
use Illuminate\Http\Request;
use NotasSys\Nota;
use Illuminate\Support\Facades\Storage;


class NotaController extends Controller
{
    
    public function index()
    {
    $notas = Nota::all();
        
        return view('notas.index', compact('notas'));
    }

    public function create()
    {
        $hoy = \Carbon\Carbon::now()->locale('es_AR')->isoFormat('DD/MM/YYYY');

       return view('notas.create')->with('hoy', $hoy);
    }


    public function store(Request $request,Nota $nota)
    {
                request()->validate([
                'numero' => 'required|numeric',
                'asunto' => 'required',
                'descripcion'=> 'required',
                'fecha'=>'required|date',
                'adjunto'=>'file|nullable'

        ]);
            
        if($request->hasFile('adjunto')){
            $fileNameToStore = \Carbon\Carbon::now().$request->file('adjunto')->getClientOriginalName();

            // dd($fileNameToStore);
            // $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
            // $extension=$request->file('adjunto')->getOriginalClientExtension();
            // $fileNameToStore= $filename.'.'.$extension;
            $path=$request->file('adjunto')->storeAs('public/adjuntos',$fileNameToStore);
        }else{
             $fileNameToStore = 'noimage.jpg';
        }
        // // $path=request()->file('adjunto')->storeAs('public/adjuntos',);
        // // request()->adjunto->storeAs('adjunto', request()->file->getClientOriginalName());

        // Nota::create(request(['numero','asunto','descripcion','fecha','adjunto']));
        $nota->numero=request('numero');
        $nota->asunto=request('asunto');
        $nota->descripcion=request('descripcion');
        $nota->fecha=request('fecha');
        $nota->adjunto=$path;
        $nota->save();
        return redirect('/notas');

    }


    public function show()
    {
   
    }


    public function edit(Nota $nota)
    {
        return view('notas.edit',compact('nota'));
    }

    public function update(Nota $nota)
    {
        $nota->update(request(['numero', 'asunto','descripcion','fecha']));

        return redirect('/notas');
    }

    public function destroy(Nota $nota)
    {

        Storage::delete($nota->adjunto);
        $nota->delete();
        return redirect('/notas');
    }
}
