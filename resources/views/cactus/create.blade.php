@extends('layouts.app')

@section('content')

    <div class="container">
        <form action="{{ url('/cactus')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('cactus.from', ['Modo'=>'crear'])
    
        </form>
    </div>

@endsection