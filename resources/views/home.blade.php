@extends('layout')
@section('title') 
Home 
@endsection
@section('content')
<h1>Home</h1>
@auth
{{ auth()->user()->name }}
@endauth
@endsection