	<nav>
		<ul>
			<li class="{{ setActive('home') }}"><a href="/">Home</a></li>
			<li class="{{ setActive('about') }}"><a href="/about">About</a></li>
			<li class="{{ setActive('project.*') }}"><a href="{{ route('project.index') }}">Projectos</a></li>
			<li class="{{ setActive('contact') }}"><a href="/contact">Contact</a></li>
			@guest
				<li class="{{ setActive('login') }}"><a href="{{ route('login') }}">Login</a></li>
			@else
				<a href="#" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">logout</a>
			@endguest
		</ul>
	</nav>
	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	</form>