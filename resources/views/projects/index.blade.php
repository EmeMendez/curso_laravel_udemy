@extends('layout')
@section('title')
Portafolio
@endsection
@section('content')
   <h1>Portfolio</h1>
      @auth
         <a href="{{ route('project.create') }}" ><button>Crear nuevo proyecto</button><br></a>
      @endauth
   <ul>
   	@foreach($projects as $p)
   		<li><a href="{{ route('project.show',$p) }}" >{{ $p->title }}</a></li><small>{{ $p->description }}</small><br>
   		<small>{{ $p->created_at->diffForhumans() }}</small>
   	@endforeach
   </ul>
   <p>{{ $projects->links() }}</p>
@endsection