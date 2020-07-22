<?php

namespace App\Http\Controllers;

use App\cactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datocus['plantas']=cactus::paginate(5);
        return view('cactus.index', $datocus);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function clien()
    {
        $datocus['plantas']=cactus::paginate(5);
        return view('clientes.cac', $datocus);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cactus.create');
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

        cactus::insert($datosplatas);

        return redirect('cactus')->with('Mensaje', 'Planta agregada exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cactus  $cactus
     * @return \Illuminate\Http\Response
     */
    public function show(cactus $cactus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cactus  $cactus
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $planta=cactus::findOrFail($id);
        return view('cactus.edit', compact('planta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cactus  $cactus
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

            $planta=cactus::findOrFail($id);

            Storage::delete('public/'.$planta->foto);

            $datosplatas['foto']=$request->file('foto')->store('uploads', 'public');

        }
        
        cactus::where('id','=',$id)->update($datosplatas);

        
        return redirect('cactus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cactus  $cactus
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $planta=cactus::findOrFail($id);
        cactus::destroy($id);
        if(Storage::delete('public/'.$planta->foto)){

            cactus::destroy($id);
            
        }
        return redirect('cactus')->with('Mensaje', 'Planta Eliminada exitosamente');
    }
}
