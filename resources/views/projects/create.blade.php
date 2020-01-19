@extends('layout')
@section('title')
Proyectos | nuevo proyecto
@endsection
@section('content')
   <h1>Nuevo Proyecto</h1>
   @include('partials.validation_errors')
   <form method="post" action="{{ route('project.store') }}" >
   		@include('projects._form',['buttom' => 'Crear' ])
   </form>
   
@endsection