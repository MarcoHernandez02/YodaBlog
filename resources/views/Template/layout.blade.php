<!DOCTYPE HTML>
<html>
	<head>
		<title>Yoda Mr. Miyagi</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/css/main.css" />
		<link rel="shortcut icon" href="https://i.etsystatic.com/32214844/r/il/1273e9/3436913538/il_340x270.3436913538_t4vk.jpg">
	</head>
	<body class="is-preload">

		<!-- Nav -->
			<nav class="" id="nav">
				<ul class="container">
					<li class="nav-item {{! Route::is('index') ?: 'active' }}"><a href="{{route('index')}}" class="nav-link">
					<i class="fas fa-home"></i>
						HOME
					</a></li>
					<li class="nav-item {{! Route::is('game') ?: 'active' }}"><a href="{{route('game')}}" class="nav-link">
						<i class="fas fa-pen"></i>	
						I'M BORED
					</a></li>
					<li class="nav-item {{! Route::is('video') ?: 'active' }} "><a href="{{route('video')}}" class="nav-link">
						<i class="fas fa-video"></i>
						VIDEO
					</a></li>
					<!--<li class="nav-item"><a href="{{route('contact')}}" class="nav-link">
						<i class="fas fa-comments"></i>
						CONTACT
					</a></li>-->
				</ul>
			</nav>

			@yield('seccion1')
			@yield('seccion2')
			@yield('seccion3')
			@yield('seccion4')
			@yield('seccion5')

            <!-- Scripts -->
            <script src="/js/jquery.min.js"></script>
            <script src="/js/jquery.scrolly.min.js"></script>
            <script src="/js/browser.min.js"></script>
            <script src="/js/breakpoints.min.js"></script>
            <script src="/js/util.js"></script>
            <script src="/js/main.js"></script>
	</body>
</html>