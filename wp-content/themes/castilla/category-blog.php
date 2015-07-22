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

		<div class="container">
			<div class="entry-content">
				<?php if ( have_posts() ) : ?>
				<ul class="lista-blog">
					<?php
						// Start the Loop.
					while ( have_posts() ) : the_post();
					?>
					<?php get_template_part( 'inc/lista', 'blog' ); ?>
					<?php
					endwhile;

					// twentyfourteen_paging_nav();

					?>
				</ul>
				<?php castilla_paginacao(); ?>
				<?php
				else :
						// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;
				?>
			</div> <!-- .entry-content -->
		</div>
	</div><!-- #content -->
</section><!-- #primary -->

<?php
get_footer();
