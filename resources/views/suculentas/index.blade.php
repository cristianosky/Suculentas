@extends('layouts.app')

@section('content')
    <div class="container">
        @guest
        
        @else
            <a href="{{ url('suculentas/create')}}" class="btn btn-success">Agregar planta</a><br><br>
            @if(Session::has('Mensaje')){{
                Session::get('Mensaje')
            }}
            @endif
        @endguest
    

        @foreach ($plantas as $planta)
                
            <div class="clienimg" >

                <img src="{{ asset('storage').'/'.$planta->foto}}" alt="" class="imgc">

                <span> <h3>{{ $planta->Nombre}}</h3> </span>

                <span> <h6>{{ $planta->Descripcion}}</h6> </span>
                @guest
                
                @else

                    <a href="{{ url('/suculentas/'.$planta->id.'/edit') }}" class="btn btn-warning">
                
                        Editar

                    </a>

                    | 

                    <form action="{{ url('/suculentas/'.$planta->id) }}" style="display:inline" method="post">
                        @csrf
        
                        {{ method_field('DELETE') }}
        
                        <button type="submit" class="btn bg-danger" onclick="return confirm('¿Borrar?');">Borrar</button>
                    </form>

                @endguest

            </div>
      
        @endforeach

    </div>
   
   
@endsection