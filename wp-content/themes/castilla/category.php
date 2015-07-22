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
		<div class="container">
			<header class="archive-header">
				<h1 class="archive-title"><?php printf( single_cat_title( '', false ) ); ?></h1>
			</header><!-- .archive-header -->

			<div class="row">
				<div class="col-md-9">
					<div class="text-center subcategorias">
						<?php
						$categories =  get_categories('child_of=1&hide_empty=0');

// print_r($categories);
						foreach ($categories as $category) : ?>

						<a href="/pagina/<?php echo $category->slug; ?>" title="<?php echo $category->name; ?>">
							<?php echo $category->name; ?>
						</a>
						<?php
						endforeach;
						?>
					</div> <!-- .subcategorias -->
					<?php if ( have_posts() ) : ?>
					<?php
					// Start the Loop.
					while ( have_posts() ) : the_post();
					?>
					<ul class="media-list">
						<li class="media">
							<?php 
							if ( has_post_thumbnail() ) {
	//$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
								echo '<span class="pull-left"><a href="' . get_the_permalink() . '" title="' . the_title_attribute( 'echo=0' ) . '">';
								the_post_thumbnail( 'thumbnail' );
								echo '</a></span>';
							}
							?>
							<div class="media-body">
								<header class="entry-header">
									<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
									<div class="entry-meta">
										<?php
										if ( 'post' == get_post_type() )
											twentyfourteen_posted_on();

										if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
											/*<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>*/
										?>
										<?php
										endif;

										edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
										?>
									</div><!-- .entry-meta -->
								</header>
								<div class="entry-content">
									<?php
									the_excerpt();
									wp_link_pages( array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '<span>',
										'link_after'  => '</span>',
										) );
										?>
									</div><!-- .entry-content -->
								</div> <!-- .media-body -->
							</li>
						</ul>
						<?php
						endwhile;

						twentyfourteen_paging_nav();

						?>
						<?php
						else :
					// If no content, include the "No posts found" template.
							get_template_part( 'content', 'none' );

						endif;
						?>
					</div> <!-- .col-md-9 -->
					<div class="col-md-3">
						<form class="form-sidebar" action="<?= get_home_url(); ?>" method="get" role="search">
							<div class="form-group">
								<input type="text" class="form-control input-sm" placeholder="Pesquise" name="s" value="<?php echo get_search_query(); ?>" id="s">
							</div>
							<button type="submit" class="button"><span class="icon-mag"></span><span class="sr-only">Pesquisar</span></button>
						</form>

						<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
						<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'sidebar-1' ); ?>
						</div><!-- #primary-sidebar -->
					<?php endif; ?>
				</div> <!-- .col-md-3 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div><!-- #content -->
</section><!-- #primary -->

<?php
get_sidebar( 'content' );
get_footer();
