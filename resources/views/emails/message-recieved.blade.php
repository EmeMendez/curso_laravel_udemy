<!DOCTYPE html>
<html>
<head>
	<title>Mensaje</title>
</head>
<body>
<h1>Contenido del email</h1>
	<p>Recibiste un mensaje de: {{ $msg['name'] }} - {{ $msg['email'] }}</p>
	<p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
	<p><strong>Contenido:</strong>{{ $msg['content'] }}</p>
</body>
</html>