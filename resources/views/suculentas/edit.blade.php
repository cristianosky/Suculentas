@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ url('/suculentas/'.$planta->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
    
            @include('suculentas.from', ['Modo'=>'edit'])
    
        </form>
    </div>

@endsection