<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

<?php
				// Start the Loop.
while ( have_posts() ) : the_post();

?>
<?php castilla_breadcrumb(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-header">
		<div class="container">
			<header class="entry-header">
				<h1 class="text-warning">
					<?php
						// twentyfourteen_post_thumbnail();
					the_title();
					?>
				</h1>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<? if (get_the_post_thumbnail()) { ?>
	<div class="box-imagem-full" style="">
		<?php echo get_the_post_thumbnail(); ?>
	</div> <!-- .box-imagem -->
	<? } //if (get_the_post_thumbnail( $page )) { ?>
	<div class="page-header">
		<div class="container">
			<header class="entry-header">
				<h2 class="h1">
					Mande sua mensagem
				</h2>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-contato">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5">
					<div class="entry-content">
						<?php
						the_content();
						?>
						<?php
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							) );

						edit_post_link( __( 'Editar', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
						?>
					</div><!-- .entry-content -->
				</div> <!-- .col-md-7 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .page-contato -->
</article><!-- #post-## -->
<?

					// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/
				endwhile;
				?>
				


				<?php
				get_footer();

