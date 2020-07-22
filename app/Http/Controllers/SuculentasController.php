<?php

namespace App\Http\Controllers;

use App\suculentas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuculentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datocus['plantas']=suculentas::paginate(5);
        return view('suculentas.index', $datocus);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suculentas.create');
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

        suculentas::insert($datosplatas);

        return redirect('suculentas')->with('Mensaje', 'Planta agregada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\suculentas  $suculentas
     * @return \Illuminate\Http\Response
     */
    public function show(suculentas $suculentas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\suculentas  $suculentas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planta=suculentas::findOrFail($id);
        return view('suculentas.edit', compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\suculentas  $suculentas
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

            $planta=suculentas::findOrFail($id);

            Storage::delete('public/'.$planta->foto);

            $datosplatas['foto']=$request->file('foto')->store('uploads', 'public');

        }
        
        suculentas::where('id','=',$id)->update($datosplatas);

        
        return redirect('suculentas');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\suculentas  $suculentas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planta=suculentas::findOrFail($id);
        if(Storage::delete('public/'.$planta->foto)){

            suculentas::destroy($id);
            
        }
        return redirect('suculentas')->with('Mensaje', 'Planta Eliminada exitosamente');
    }
}
