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
		<?php 
		if (!is_paged()){ 
			global $post;
			$args = array( 'numberposts' => 1, 'category_name' => 'videos' );
			$posts = get_posts( $args );
			foreach( $posts as $post ): setup_postdata($post); 
			?>
			<div class="video-destaque">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'youtube_id', true); ?>" width="588" height="331" class="embed-responsive-item" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .video-destaque -->
		<?php endforeach; //foreach( $posts as $post ): setup_postdata($post);  ?>
		<div class="page-header">
			<div class="container">
				<header class="entry-header">
					<h2 class="h1">
						Galeria de vídeos
					</h2>
				</header>
			</div> <!-- .container -->
		</div> <!-- .page-header -->
		<?php } //if (is_paged()){ ?>
		<div class="container">
			<div class="entry-content">
				<?php 
				// global $post;
				$args = array( 'posts_per_page' => get_option( 'posts_per_page' ), 'category_name' => 'videos', 'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ) );
				$postslist = new WP_Query( $args );
				if ( have_posts() ) : ?>
				<ul class="lista-videos clearfix">
					<?php
						// Start the Loop.
					while ( $postslist->have_posts() ) : $postslist->the_post(); 
					// while ( have_posts() ) : the_post();
					?>
					<li>
						<div class="embed-responsive embed-responsive-16by9">
							<iframe src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'youtube_id', true); ?>" width="588" height="331" class="embed-responsive-item" frameborder="0" allowfullscreen></iframe>
						</div>
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
	$('.lista-videos').find('> li:nth-child(2n-1)').addClass('first');
});
</script>
<?php
get_footer();
