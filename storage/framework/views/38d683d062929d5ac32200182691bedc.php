<!DOCTYPE HTML>

<html>
	<head>
        <?php echo $__env->yieldContent('head'); ?>
		<title>Tutorial Timetables</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>" />
		<link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>" />

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
                                        <a href="<?php echo e(route('welcome')); ?>">
										    <img class="imagem fit" id="LogoASC" src="<?php echo e(asset('images/LogoASC.png')); ?>" alt="Logo aSc">
                                        </a>
                                    </figure>
									<ul class="icons">
										<li><a target="_blank" href="https://github.com/Guilhermefls/ManualWebASCTimeTables" class="icon brands fa-github"><span class="label">GitHub</span></a></li>

									</ul>
								</header>
                                <div id="conteudo">
							        <?php echo $__env->yieldContent('content'); ?>
                                </div>
                        </div>
					</div>
				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form id="searchForm" method="get" action="<?php echo e(route('postagens.buscar')); ?>">
                                        <input type="text" name="query" id="query" placeholder="Buscar" value="<?php echo e(request()->get('query')); ?>" >
                                    </form>
								</section>
							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="<?php echo e(route('welcome')); ?>">Pagina inicial</a></li>
										<li><a href="<?php echo e(route('postagens.instrucoes')); ?>">Instruções gerais</a></li>
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
			<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/browser.min.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/breakpoints.min.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/util.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>

	</body>
</html><?php /**PATH C:\Users\user\OneDrive\Documentos\ManualWebAscTimetables\resources\views/layouts/app.blade.php ENDPATH**/ ?>