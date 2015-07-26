<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<div class="home-banner">
	<a href="javascript:void(0);" class="cycle-prev"><span class="fa fa-arrow-circle-o-left"></span></a>
	<a href="javascript:void(0);" class="cycle-next"><span class="fa fa-arrow-circle-o-right"></span></a>
	<ul class="cycle-slideshow" data-cycle-fx="scrollHorz" data-cycle-timeout="5000" data-cycle-speed="1800" data-cycle-slides="> li" data-cycle-pager=".home-banner .cycle-nav" data-cycle-next=".home-banner .cycle-next" data-cycle-prev=".home-banner .cycle-prev" data-cycle-easing="easeInOutExpo" data-cycle-log="false" data-cycle-swipe="true">
		<?php $args = array(
			'orderby'          => 'rating',
			'category_name'    => 'banner',
			'categorize'       => 0,
			'title_li'         => '',
			'category_orderby' => 'name',
			'category_order'   => 'ASC',
			'class'            => 'linkcat',
			'category_before'  => '<div>',
			'show_name'		=> false,
			'category_after'   => '</div>' ); ?> 
			<?php wp_list_bookmarks($args); ?>
		<? /* <li>
			<div class="content" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/banner-01.jpg);">
				<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" alt="pixel" class="pixel">
			</div> <!-- .content -->
		</li> */ ?>
	</ul>
	<div class="cycle-nav"></div>
</div> <!-- .home-banner -->
<div class="home-teste">
	<div class="page-header">
		<div class="container">
			<h2 class="h3">
				Teste seus conhecimentos online!
				<small>Ainda não é aluno? Descubra através de um QUIZ online o nível do seu idioma.</small>
			</h2>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-content" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/teste-seu-conhecimento.jpg);">
		<a href="/teste-seu-conhecimento/"><img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" alt="pixel" class="pixel"></a>
	</div> <!-- .page-content -->
</div> <!-- .home-teste -->
<div class="home-escolher">
	<div class="page-header">
		<div class="container">
			<h2 class="h3">
				Por quê escolher o Castilla Idiomas?
				<small>Listamos Alguns motivos do porque estudar no Castilla Idiomas!</small>
			</h2>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-offset-3 col-sm-9 col-sm-offset-3">
					<h2>O CASTILLA IDIOMAS ESTÁ MELHOR, MAIS RÁPIDO E MAIS COMPLETO!</h2>
					<ul>
						<li>+ Melhor: Material de estudo moderno e atualizado;</li>
						<li>+ Rápido: Cursos com maior ênfase à conversação;</li>
						<li>+ Completo: Estruturas modernas e tecnológicas.</li>
					</ul>
					<h3>Motivos não faltam para estudar no Castilla!</h3>
					<div class="box-depoimento">
						<div class="media">
							<span class="pull-left imagem" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/aluna.jpg);"><img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" class="pixel" alt="pixel"></span>
							<div class="media-body">
								<div class="title">DEPOIMENTOS DE ALUNOS</div>
								<div class="texto">
									"No Castilla Idiomas consegui ter certificado de confiança para o meu
									primeiro emprego e consegui desenvolver melhor minha
									fala na vivência nos EUA." <span class="autor">(Alessandra Silva, Ex-Aluna)</span>
								</div>
							</div> <!-- .media-body -->
						</div> <!-- .media -->
					</div> <!-- .box-depoimento -->
				</div> <!-- .col-md-9 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .page-content -->
</div> <!-- .home-escolher -->
<div class="home-metodologia">
	<div class="page-header">
		<div class="container">
			<h2 class="h3">
				Metodologia Castilla
				<small>Listamos Alguns motivos do porque estudar no Castilla Idiomas!</small>
			</h2>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-content" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/metodologia.jpg);">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" alt="" class="pixel">
	</div> <!-- .page-content -->
</div> <!-- .home-metodologia -->
<div class="home-aula">
	<div class="page-header">
		<div class="container">
			<h2 class="h3">
				Agende uma aula demonstrativa
				<small>Ficou com vontade de assistir uma aula demonstrativa? Agende aqui!</small>
			</h2>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5 col-sm-6 col-sm-offset-6">
					<form action="">
						<div class="form-group">
							<label class="sr-only">Nome:</label>
							<input type="text" class="form-control input-sm" placeholder="Nome:">
						</div> <!-- .form-group -->
						<div class="form-group">
							<label class="sr-only">Telefone:</label>
							<input type="text" class="form-control input-sm" placeholder="Telefone:">
						</div> <!-- .form-group -->
						<div class="form-group">
							<label class="sr-only">Celular:</label>
							<input type="text" class="form-control input-sm" placeholder="Celular:">
						</div> <!-- .form-group -->
						<div class="form-group">
							<label class="sr-only">E-mail:</label>
							<input type="email" class="form-control input-sm" placeholder="E-mail:">
						</div> <!-- .form-group -->
						<div class="form-group">
							<label class="sr-only">Língua pretendida:</label>
							<input type="text" class="form-control input-sm" placeholder="Língua pretendida:">
						</div> <!-- .form-group -->
						<p class="text-right">
							<button class="btn btn-success btn-sm" type="submit">ENVIAR</button>
						</p>
					</form>
				</div> <!-- .col-md-7 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .page-content -->
</div> <!-- .home-aula -->
<div class="home-matricula">
	<div class="page-header">
		<div class="container">
			<h2 class="h3">
				Faça sua pré-matrícula online
				<small>Listamos alguns motivos do porque estudar no Castilla Idiomas!</small>
			</h2>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-content">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5 col-sm-6 col-sm-offset-6">
					<form action="">
						<div class="form-group">
							<label class="sr-only">Nome:</label>
							<input type="text" class="form-control input-sm" placeholder="Nome:">
						</div> <!-- .form-group -->
						<div class="form-group">
							<label class="sr-only">Telefone:</label>
							<input type="text" class="form-control input-sm" placeholder="Telefone:">
						</div> <!-- .form-group -->
						<div class="form-group">
							<label class="sr-only">Celular:</label>
							<input type="text" class="form-control input-sm" placeholder="Celular:">
						</div> <!-- .form-group -->
						<div class="form-group">
							<label class="sr-only">E-mail:</label>
							<input type="email" class="form-control input-sm" placeholder="E-mail:">
						</div> <!-- .form-group -->
						<div class="form-group">
							<label class="sr-only">Língua pretendida:</label>
							<input type="text" class="form-control input-sm" placeholder="Língua pretendida:">
						</div> <!-- .form-group -->
						<p class="text-right">
							<button class="btn btn-success btn-sm" type="submit">ENVIAR</button>
						</p>
					</form>
				</div> <!-- .col-md-7 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .page-content -->
</div> <!-- .home-matricula -->
<div class="home-chamadas">
	<div class="page-content">
		<div class="container">
			<div class="row">
				<a href="#" class="col-md-4 col-sm-4 chamada">
					<span class="content">
						<span class="imagem"><span class="fa fa-calendar"></span></span>
						<span class="title">Calendário</span>
					</span>
				</a> <!-- .chamada -->
				<a href="#" class="col-md-4 col-sm-4 chamada">
					<span class="content">
						<span class="imagem"><span class="fa fa-video-camera"></span></span>
						<span class="title">Galeria de Vídeos</span>
					</span>
				</a> <!-- .chamada -->
				<a href="#" class="col-md-4 col-sm-4 chamada">
					<span class="content">
						<span class="imagem"><span class="fa fa-image"></span></span>
						<span class="title">Galeria de Fotos</span>
					</span>
				</a> <!-- .chamada -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .page-content -->
</div> <!-- .home-chamadas -->
<div class="home-marketing">
	<div class="page-header">
		<div class="container">
			<h2 class="h3">
				Assine nosso e-mail marketing
				<small>Quer receber dicas e novidades do Castilla? Assine nosso boletim eletrônico!</small>
			</h2>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-content">
		<div class="container">

			<form action="">
				<div class="form-group row">
					<label class="sr-only">Nome:</label>
					<div class="col-md-7 col-sm-6">
						<input type="text" class="form-control input-sm" placeholder="Nome:">
					</div>
				</div> <!-- .form-group -->
				<div class="form-group row">
					<label class="sr-only">Telefone:</label>
					<div class="col-md-7 col-sm-6">
						<input type="text" class="form-control input-sm" placeholder="Telefone:">
					</div>
				</div> <!-- .form-group -->
				<div class="form-group row">
					<label class="sr-only">E-mail:</label>
					<div class="col-md-7 col-sm-6">
						<input type="email" class="form-control input-sm" placeholder="E-mail:">
					</div>
					<div class="col-md-5">
						<button class="btn btn-info btn-sm" type="submit">ENVIAR</button>
					</div>
				</div> <!-- .form-group -->
			</form>
		</div> <!-- .container -->
	</div> <!-- .page-content -->
</div> <!-- .home-marketing -->
<div class="home-blog">
	<div class="container">
		<?php
    // Get the ID of a given category
		$category_id = get_cat_ID( 'Blog' );

    // Get the URL of this category
		$category_link = get_category_link( $category_id );
		?>
		<h2 class="page-title">Últimas do blog</h2>
		<div class="page-content">
			<ul class="lista-blog">
				<?
				global $post;
				$args = array( 'numberposts' => 3, 'category_name' => 'blog' );
				$posts = get_posts( $args );
				if ($posts) {
					foreach( $posts as $post ): setup_postdata($post); 

					?>
					<?php get_template_part( 'inc/lista', 'blog' ); ?>
					<?php
					endforeach; 
				} else { echo '<p class="text-center">No momento não há nenhum post publicado.</p>';}
				?>
			</ul>
			<p class="text-right">
				<a href="<?= $category_link; ?>" class="btn btn-primary" title="Veja todos os posts">Ver Mais <i class="fa fa-arrow-circle-o-right"></i></a>
			</p>
		</div> <!-- .page-content -->
	</div> <!-- .container -->
</div> <!-- .home-blog -->
<div class="home-onde">
	<div class="page-header">
		<div class="container">
			<h2 class="h3">
				Onde estamos?
				<small>Descubra o Castilla Idiomas mais próximo de você!</small>
			</h2>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-content">
		<!-- GMAPS START -->
		<style type="text/css">
		html { height: 100%; }
		body { height: 100%; margin: 0px; padding: 0px; }
		#map_canvas { height: 100%; }
		#map_canvas2 { height: 100%; }
		</style>
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
		<script type="text/javascript">
		function initialize(Lat, Lon, obj) {
			var myLatlng = new google.maps.LatLng(Lat, Lon);
			var myOptions = {
				zoom: 16,
				center: myLatlng,
				scrollwheel: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
			var map = new google.maps.Map(document.getElementById(obj), myOptions);

			var image = '/_assets/images/site/marker.png';
			var beachMarker = new google.maps.Marker({
				position: myLatlng,
				map: map/*,
				icon: image*/
			});

			google.maps.event.addListener(beachMarker, 'click', function() {
				infowindow.open(map, beachMarker);
			});
		}

		$(function() {
			initialize($("#map_canvas").data("lat"), $("#map_canvas").data("lon"), $("#map_canvas").attr("id"));
		});
		</script>
		<!-- GMAPS END -->
		<div id="map_canvas" class="" style="width:100%; height:270px" data-lat="-1.4593072242672522"
		data-lon="-48.48911672830582"></div>
	</div>
</div> <!-- .home-onde -->

<?php get_footer(); ?>