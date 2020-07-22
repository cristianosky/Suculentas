<?php

namespace App\Http\Controllers;

use App\ortencias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrtenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datocus['plantas']=ortencias::paginate(5);
        return view('ortencias.index', $datocus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ortencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:100',
            'foto' => 'required|max:10000|mimes:jpeg,png,jpg'
        ];
        $Mensaje=["required"=>'El :attribute es requerido'];

        $this->validate($request, $campos,$Mensaje);

        $datosplatas=request()->except('_token');

        if($request->hasFile('foto')){

            $datosplatas['foto']=$request->file('foto')->store('uploads', 'public');

        }

        ortencias::insert($datosplatas);

        return redirect('ortencias')->with('Mensaje', 'Planta agregada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ortencias  $ortencias
     * @return \Illuminate\Http\Response
     */
    public function show(ortencias $ortencias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ortencias  $ortencias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planta=ortencias::findOrFail($id);
        return view('ortencias.edit', compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ortencias  $ortencias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos=[
            'Nombre' => 'required|string|max:100',
            'Descripcion' => 'required|string|max:100'
            
        ];
        
        if($request->hasFile('foto')){
            $campos+=['foto' => 'required|max:10000|mimes:jpeg,png,jpg' ];
        }
        
        $Mensaje=["required"=>'El :attribute es requerido'];
        $this->validate($request, $campos,$Mensaje);
        
        $datosplatas=request()->except(['_token','_method']);

        if($request->hasFile('foto')){

            $planta=ortencias::findOrFail($id);

            Storage::delete('public/'.$planta->foto);

            $datosplatas['foto']=$request->file('foto')->store('uploads', 'public');

        }
        
        ortencias::where('id','=',$id)->update($datosplatas);

        
        return redirect('ortencias');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ortencias  $ortencias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planta=ortencias::findOrFail($id);
        
        if(Storage::delete('public/'.$planta->foto)){

            ortencias::destroy($id);
            
        }
        return redirect('ortencias')->with('Mensaje', 'Planta Eliminada exitosamente');
    }
}
