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
					Escolha seu idioma
				</h2>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-escolha">
		<div class="container">
			<a href="/teste-seu-idioma/teste-de-ingles/" title="Acesse" class="idioma idioma-1">Inglês</a>
			<a href="/teste-seu-idioma/teste-de-italiano/" title="Acesse" class="idioma idioma-2">Italiano</a>
			<a href="/teste-seu-idioma/teste-de-alemao/" title="Acesse" class="idioma idioma-3">Alemão</a>
			<a href="/teste-seu-idioma/teste-de-espanhol/" title="Acesse" class="idioma idioma-4">Espanhol</a>
			<a href="/teste-seu-idioma/teste-de-frances/" title="Acesse" class="idioma idioma-5">Francês</a>
		</div> <!-- .container -->
	</div> <!-- .page-escolha -->
	<div class="page-header">
		<div class="container">
			<header class="entry-header">
				<h2 class="h1">
					Agende um teste no Castilla
				</h2>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-teste-seu-idioma">
		<div class="container">
			<div class="entry-content">
				<div class="row">
					<div class="col-md-8 col-md-offset-4 col-sm-7 col-sm-offset-5">
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
					</div>
				</div>
			</div><!-- .entry-content -->
		</div> <!-- .container -->
	</div> <!-- .page-teste-seu-idioma -->
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

