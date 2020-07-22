@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ url('/plantas/'.$planta->id) }}" method="post" enctype="multipart/form-data">

            @csrf
            {{ method_field('PATCH') }}
            @include('plantas.form', ['Modo'=>'editar'])
        
        </form>
    </div>

@endsection