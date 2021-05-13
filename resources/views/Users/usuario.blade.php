@extends('layouts.plantilla')
@section('content')
    <a href="{{route('home')}}">Atras</a>
    <ul>
        <li><a href="{{route('direccion')}}">Añadir direccion</a></li>
        <li><a href="">Comprar</a></li>
    </ul>

@endsection()
