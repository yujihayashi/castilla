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
	<div class="box-imagem" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/idiomas.jpg);">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" class="pixel" alt="">
	</div> <!-- .box-imagem -->
	<div class="page-header">
		<div class="container">
			<header class="entry-header">
				<h2 class="h3">
					Por que escolher o Castilla Idiomas?
					<small>Listamos alguns motivos do porquê estudar no Castilla Idiomas!</small>
				</h2>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="box-imagem" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/por-que-escolher-o-castilla.jpg);">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" class="pixel" alt="">
	</div> <!-- .box-imagem -->
	<div class="box-imagem" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/sobre.jpg);">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" class="pixel" alt="">
	</div> <!-- .box-imagem -->
	<div class="page-header">
		<div class="container">
			<header class="entry-header">
				<h2 class="h1">
					Sobre o Castilla
				</h2>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="container">
		<div class="entry-content">
			<?php
			the_content();
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				) );

			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-content -->
	</div> <!-- .container -->
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

