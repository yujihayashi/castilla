<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<section id="primary" class="content-area">
	<div id="content" class="site-content" role="main">
		<?php castilla_breadcrumb(); ?>
		<header class="archive-header page-header">
			<div class="container">
				<h1 class="archive-title"><?php printf( single_cat_title( '', false ) ); ?></h1>
			</div>
		</header><!-- .archive-header -->
		<div class="box-imagem-full" style="">
			<img src="<?php echo get_template_directory_uri(); ?>/img/unidade-batista-campos.jpg" class="" alt="">
		</div> <!-- .box-imagem -->
		<?php get_template_part( 'inc/lista', 'unidades' ); ?>
		
	</div><!-- #content -->
</section><!-- #primary -->
<script type="text/javascript">
jQuery(document).ready( function () {
	$('.lista-fotos').find('> li:nth-child(2n-1)').addClass('first');
});
</script>
<?php
get_footer();
