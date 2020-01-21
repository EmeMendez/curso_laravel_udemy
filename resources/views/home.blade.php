@extends('layout')
@section('title') 
Home 
@endsection
@section('content')

<h1>Home</h1>
@include('prueba')
@auth
{{ auth()->user()->name }}
@endauth
@endsection