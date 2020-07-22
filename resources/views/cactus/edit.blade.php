@extends('layouts.app')

@section('content')

   <div class="container">
        <form action="{{ url('/cactus/'.$planta->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH') }}

            @include('cactus.from', ['Modo'=>'editar'])

        </form>
   </div>
@endsection