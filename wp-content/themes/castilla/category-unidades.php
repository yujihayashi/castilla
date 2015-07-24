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
		<div class="page-header">
			<div class="container">
				<header class="entry-header">
					<h2 class="h1">
						Clique em uma unidade
					</h2>
				</header>
			</div> <!-- .container -->
		</div> <!-- .page-header -->
		<div class="container">
			<div class="entry-content">
				<?php 
				// global $post;
				$args = array( 'posts_per_page' => get_option( 'posts_per_page' ), 'category_name' => 'fotos', 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) );
				$postslist = new WP_Query( $args );
				if ( have_posts() ) : ?>
				<ul class="lista-fotos clearfix">
					<?php
						// Start the Loop.
					while ( $postslist->have_posts() ) : $postslist->the_post(); 
					// while ( have_posts() ) : the_post();
					?>
					<li>
						<?php if ( has_post_thumbnail() ) { 
		$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
						<a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $thumbnail_url; ?>);" class="imagem" title="Veja a galeria de fotos"><img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" alt="pixel" class="pixel"></a>
						<?php } //if ( has_post_thumbnail() ) { ?>
						<a href="<?php the_permalink(); ?>" class="title" title="Veja a galeria de fotos"><?php echo the_title(); ?></a>
					</li>
					<?php
					endwhile;
					// endforeach;
					// twentyfourteen_paging_nav();

					?>
				</ul>
				<?php castilla_paginacao(); ?>
				<?php
				wp_reset_postdata();
				else :
						// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
				?>
			</div> <!-- .entry-content -->
		</div>
	</div><!-- #content -->
</section><!-- #primary -->
<script type="text/javascript">
jQuery(document).ready( function () {
	$('.lista-fotos').find('> li:nth-child(2n-1)').addClass('first');
});
</script>
<?php
get_footer();
