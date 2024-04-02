<!DOCTYPE HTML>

<html>
	<head>
        @yield('head')
		<title>Tutorial Timetables</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
								<header id="header">
									<figure>
										<img class="imagem fit" id="LogoASC" src="{{asset('images/LogoASC.png')}}" alt="Logo aSc">
									</figure>
									<ul class="icons">
										<li><a target="_blank" href="https://github.com/Guilhermefls/ManualWebASCTimeTables" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
							<!--		<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
										<li><a href="#" class="icon brands fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
										<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
										<li><a href="#" class="icon brands fa-medium-m"><span class="label">Medium</span></a></li>
							-->
									</ul>
								</header>

							@yield('content')
						</div>
					</div>
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Buscar" />
									</form>
								</section>
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{route('welcome')}}">Pagina inicial</a></li>
										<li>
											<span class="opener">Restrições</span>
											<ul>
												<li><a href="/Templates/turmas.html">Turmas</a></li>

											</ul>

										</li>
                                </nav>
						</div>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{{asset('assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('assets/js/browser.min.js')}}"></script>
			<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
			<script src="{{asset('assets/js/util.js')}}"></script>
			<script src="{{asset('assets/js/main.js')}}"></script>

	</body>
</html>