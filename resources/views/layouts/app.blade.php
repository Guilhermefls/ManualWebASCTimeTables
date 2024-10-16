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
                                        <a href="{{route('welcome')}}">
										    <img class="imagem fit" id="LogoASC" src="{{asset('images/LogoASC.png')}}" alt="Logo aSc">
                                        </a>
                                    </figure>
									<ul class="icons">
										<li><a target="_blank" href="https://github.com/Guilhermefls/ManualWebASCTimeTables" class="icon brands fa-github"><span class="label">GitHub</span></a></li>

									</ul>
								</header>
                                <div id="conteudo">
							        @yield('content')
                                </div>
                        </div>
					</div>
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form id="searchForm" method="get" action="{{route('postagens.buscar')}}">
                                        <input type="text" name="query" id="query" placeholder="Buscar" value="{{ request()->get('query') }}" >
                                    </form>
								</section>
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{route('welcome')}}">Pagina inicial</a></li>
										<li><a href="{{route('postagens.instrucoes')}}">Instruções gerais</a></li>
										<li>
											<span class="opener">Restrições</span>
											<ul>
												<li><a href="/restricoes/1">Professores</a></li>
                                                <li><a href="/restricoes/3">Disciplinas</a></li>
                                                <li><a href="/restricoes/4">Turmas</a></li>
                                                <li><a href="/restricoes/2">Salas</a></li>

									        </ul>
										</li>
                                    </ul>
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
			<script src="{{asset('assets/js/custom.js')}}"></script>

	</body>
</html>