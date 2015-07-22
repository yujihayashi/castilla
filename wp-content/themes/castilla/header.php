<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Castilla - Curso de Idiomas</title>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" type="image/png" />
	<meta name="author" content="Libra Design" />
	<meta name="keywords" content="" />
	<meta property="og:description" content="" />
	<meta name="description" content="" />
	<meta property="og:title" content="" />
	<meta property="og:url" content="" />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/logo-mini.jpg" />
	<meta property="og:site_name" content="" />
	<meta property="og:type" content="website" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/img/site/ycon.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/easing/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.swipe.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.scrollVert.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/library/cycle2/jquery.cycle2.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/bootstrap_site.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="extra-geral">
		<div class="site-geral">
			<header class="extra-header">
				<div class="site-header">
					<div class="line-1">
						<nav class="navbar navbar-inverse" role="navigation">
							<div class="container">												
								<div class="collapse navbar-collapse ">
									<ul class="nav navbar-nav navbar-right navbar-social">
										<li><a href="#" title="Acesse nosso"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#" title="Acesse nosso"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#" title="Acesse nosso"><i class="fa fa-instagram"></i></a></li>
										<li><a href="#" title="Acesse nosso"><i class="fa fa-youtube"></i></a></li>
										<li><a href="#" title="Acesse nosso"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#" title="Acesse nosso"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#" title="Acesse nosso"><i class="fa fa-rss"></i></a></li>
									</ul>
									<ul class="nav navbar-nav navbar-right navbar-sublinks">
										<li><a href="/aula-demonstrativa/">Aula demonstrativa</a></li>
										<li><a href="/pre-matricula/">Pré-matrícula</a></li>
										<li><a href="/category/fotos/">Fotos</a></li>
										<li><a href="/category/videos/">Vídeos</a></li>
										<li class="dropdown">
											<a href="javascript:void(0);" data-toggle="dropdown">Outros <i class="fa fa-arrow-circle-o-down"></i></a>
											<ul class="dropdown-menu">
												<li><a href="/servicos/">Serviços</a></li>
											</ul>
										</li>
									</ul>
								</div><!-- /.navbar-collapse -->
							</div>
						</nav>
					</div> <!-- .line-1 -->
					<div class="line-2">
						
						<nav class="navbar navbar-default" role="navigation">
							<div class="container">
								<div class="left clearfix">
									<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
											<span class="sr-only">Navegação</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/castilla.png" alt="Logotipo Castilla"></a>
									</div>
								</div> <!-- .left -->
								<div class="right clearfix">
									<div class="collapse navbar-collapse navbar-ex1-collapse">
										<div class="right-1 clearfix">
											<ul class="nav navbar-nav">
												<li><a href="/sobre/">O Castilla</a></li>
												<li><a href="/category/blog/">Blog</a></li>
												<li><a href="#">Cursos</a></li>
												<li><a href="#">Unidades</a></li>
												<li><a href="#">Teste seu idioma</a></li>
												<li><a href="/contato/">Contato</a></li>
											</ul>
										</div> <!-- .right-1 -->
										<div class="right-2 clearfix">
											<a href="#" target="_blank" class="btn btn-primary btn-aluno" title="Acesse a área do aluno">Aluno Online</a>
											<form class="navbar-form" method="get" role="search" action="<?= get_home_url(); ?>">
												<div class="content">
													<div class="form-group">
														<input type="text" class="form-control" placeholder="Pesquise" value="<?php echo get_search_query(); ?>">
													</div>
													<button type="submit" class="btn btn-default"><i class="fa fa-search"></i><span class="sr-only">Buscar</span></button>
												</div> <!-- .content -->
											</form>
										</div> <!-- .right-2 -->
									</div><!-- /.navbar-collapse -->
								</div> <!-- .right -->

							</div> <!-- .container -->
						</nav>
					</div> <!-- .line-2 -->
				</div> <!-- .site-header -->
			</header> <!-- .extra-header -->
			<div class="extra-central">
				<div class="site-central">