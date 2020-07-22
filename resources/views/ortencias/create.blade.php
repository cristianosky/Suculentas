@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('/ortencias')}}" method="post" enctype="multipart/form-data">
            @csrf
            
                @include('ortencias.from', ['Modo'=>'crear'])
    
        </form>
    </div>
@endsection