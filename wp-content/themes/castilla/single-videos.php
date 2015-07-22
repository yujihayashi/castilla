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
<div class="page-header">
	<div class="container">
		<?
		$terms = get_the_terms( $post->ID, 'category' );
		$term = array_pop($terms);
		?>
		<h1 class="text-warning"><a href="<?php echo get_term_link($term->slug, 'category'); ?>" class=""><?= $term->name; ?></a></h1>
	</div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php
				// Start the Loop.
			while ( have_posts() ) : the_post();

					/*
					 * Include the post format-specific template for the content. If you want to
					 * use this in a child theme, then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );

					// Previous/next post navigation.
					// twentyfourteen_post_nav();

					// If comments are open or we have at least one comment, load up the comment template.
					/*if ( comments_open() || get_comments_number() ) {
						comments_template();
					}*/
					endwhile;
					?>
				</div> <!-- .col-md-8 -->
				<div class="col-md-4">

				</div> <!-- .col-md-4 -->
			</div> <!-- .row -->
		</div> <!-- .container -->




		<?php
		get_footer();
