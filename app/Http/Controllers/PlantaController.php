<?php

namespace App\Http\Controllers;

use App\Planta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['plantas']=Planta::paginate(9);
        return view('plantas.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plantas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

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

        planta::insert($datosplatas);

        return redirect('plantas')->with('Mensaje', 'Planta agregada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function show(Planta $planta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $planta=planta::findOrFail($id);

        return view('plantas.edit', compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

            $planta=planta::findOrFail($id);

            Storage::delete('public/'.$planta->foto);

            $datosplatas['foto']=$request->file('foto')->store('uploads', 'public');

        }
        
        planta::where('id','=',$id)->update($datosplatas);

        //$planta=planta::findOrFail($id);

        //return view('plantas.edit', compact('planta'));
        return redirect('plantas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Planta  $planta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $planta=planta::findOrFail($id);

        if(Storage::delete('public/'.$planta->foto)){

            planta::destroy($id);
            
        }

        return redirect('plantas')->with('Mensaje', 'Planta eliminada exitosamente');
    }
}
