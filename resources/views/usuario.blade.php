@extends('layouts.app')
@section('content')
    <h1>
        hola {{ Auth::user()->name }}
    </h1>
@endsection
