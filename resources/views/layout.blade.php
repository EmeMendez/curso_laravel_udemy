<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<style type="text/css">
	.active a {
		color: red;
		text-decoration: none;
	}	
</style>
<header>
	@include('partials.nav')
</header>
<body>
	@include('partials.session_status')
	@yield('content')
</body>
</html>