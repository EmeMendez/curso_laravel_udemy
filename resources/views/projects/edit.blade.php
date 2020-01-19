@extends('layout')
@section('title')
Proyectos | editar proyecto
@endsection
@section('content')
   <h1>Editar Proyecto</h1>
      @include('partials.validation_errors')
   <form method="post" action="{{ route('project.update',$project) }}" >
         @method('PATCH')
         @include('projects._form',['buttom' => 'Actualizar'])
   </form>
   
@endsection