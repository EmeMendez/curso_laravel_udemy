<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
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