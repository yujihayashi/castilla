<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php castilla_breadcrumb(); ?>
<?php
    // Get the ID of a given category
$category_id = get_cat_ID( 'Blog' );

    // Get the URL of this category
$category_link = get_category_link( $category_id );
?>
<div class="page-header">
	<div class="container">
		<h1 class="text-warning"><a href="<?php echo esc_url( $category_link ); ?>" class="">Blog</a></h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php
				// Start the Loop.
			while ( have_posts() ) : the_post();
			?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?//php twentyfourteen_post_thumbnail(); ?>

				<header class="entry-header">
					<div class="media">
						<span class="pull-left">
							<span class="blog-date">
								<span class="day"><?php echo get_the_date('d'); ?></span>
								<span class="month"><?php echo get_the_date('M'); ?></span>
							</span>
						</span>
						<div class="media-body">
							<?php

							the_title( '<h1 class="entry-title text-primary h2 media-heading"><span class="text">', '</span><span class="space"></span></h1>' );

							?>
						</div> <!-- .media-body -->
					</div> <!-- .media -->

					<div class="entry-meta">
						<?php
						if ( 'post' == get_post_type() ) {

							if ( is_single() && !in_category('modalidades')  ) :
						// twentyfourteen_posted_on();
								endif;
						}

						if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
							/*<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>*/
						?>
						<?php
						endif;

						edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
						?>
					</div><!-- .entry-meta -->
				</header><!-- .entry-header -->
				<?php if ( has_post_thumbnail() ) { 
					$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<? /* 
					<div class="blog-imagem" style="background-image:url(<?php echo $thumbnail_url; ?>);">
						<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" clas="pixel" alt="">
					</div> <!-- .blog-imagem -->
					*/ ?>
					<div class="blog-imagem">
						<img src="<?php echo $thumbnail_url; ?>" class="img-responsive" alt="">
					</div> <!-- .blog-imagem -->
					<?php } //if ( has_post_thumbnail() ) { ?>
					<div class="entry-content">
						<?php
						the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							) );
							?>
						</div><!-- .entry-content -->

						<?php the_tags( '<footer class="entry-meta"><span class="tag-links">Tags: ', ', ', '</span></footer>' ); ?>
					</article><!-- #post-## -->
					<?php

					endwhile;
					?>

<h3>Compartilhe</h3>
<?php social_share_castilla(); ?>

<h3>Comentários</h3>
					<?php echo do_shortcode('[vivafbcomment]'); ?> 
				</div> <!-- .col-md-8 -->
				<div class="col-md-4">

				</div> <!-- .col-md-4 -->
			</div> <!-- .row -->
			<?php
    // Get the ID of a given category
			$category_id = get_cat_ID( 'Blog' );

    // Get the URL of this category
			$category_link = get_category_link( $category_id );
			?>
			<div class="outros-posts">
				<h2 class="page-title">ÚLTIMAS DO BLOG</h2>
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
			</div> <!-- .outros-posts -->
		</div> <!-- .container -->




		<?php
		get_footer();
