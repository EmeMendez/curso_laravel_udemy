@extends('layout')
@section('title') 
	Contacto 
@endsection
@section('content')
<h1>Contact</h1>
<h2>Formulario</h2>

@include('partials.session_status')

<form method="post" action="{{ route('contact') }}">
	@csrf
	<input type="text" name="name" placeholder="Nombre..." value="{{ old('name') }}" ><br>
	{!! $errors->first('name','<small>:message</small><br>') !!}
	<input type="email" name="email" placeholder="Email..." value="{{ old('email') }}" ><br>
	{!! $errors->first('email','<small>:message</small><br>') !!}
	<input type="text" name="subject" placeholder="Asunto..." value="{{ old('subject') }}" ><br>	
	{!! $errors->first('subject','<small>:message</small><br>') !!}

	<textarea name="content" placeholder="Mensaje..." value="{{ old('content') }}" ></textarea><br>	
	{!! $errors->first('content','<small>:message</small><br>') !!}

	<button>Enviar</button>
</form>
@endsection