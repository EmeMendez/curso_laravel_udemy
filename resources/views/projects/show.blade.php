@extends('layout')
	@section('title')
		Portafolio | {{ $project->title }}
	@endsection
	@section('content')
		<h1>{{ $project->title }}</h1>
		@auth
			<a href="{{ route('project.edit',$project) }}" ><button>Editar proyecto</button></a>
			<form method="post" action="{{ route('project.destroy',$project) }}" >
				@csrf
				@method('DELETE')
				<button>Eliminar</button>
			</form>
		@endauth	
		<p>{{ $project->description }}</p>
		<p>{{ $project->created_at->diffForHumans() }}</p>
	@endsection