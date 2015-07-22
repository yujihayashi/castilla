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
	<div class="box-imagem" style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/pre-matricula.jpg);">
		<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" class="pixel" alt="">
	</div> <!-- .box-imagem -->
	<div class="page-header">
		<div class="container">
			<header class="entry-header">
				<h2 class="h1">
					Faça sua pré-matrícula
				</h2>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-matricula">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-md-offset-5 col-sm-6 col-sm-offset-6">
					<div class="entry-content">
						<?php
						the_content();
						?>
					</div><!-- .entry-content -->
						<form action="">
							<div class="form-group">
								<label class="sr-only">Nome:</label>
								<input type="text" class="form-control input-sm" placeholder="Nome:">
							</div> <!-- .form-group -->
							<div class="form-group">
								<label class="sr-only">Telefone:</label>
								<input type="text" class="form-control input-sm" placeholder="Telefone:">
							</div> <!-- .form-group -->
							<div class="form-group">
								<label class="sr-only">Celular:</label>
								<input type="text" class="form-control input-sm" placeholder="Celular:">
							</div> <!-- .form-group -->
							<div class="form-group">
								<label class="sr-only">E-mail:</label>
								<input type="email" class="form-control input-sm" placeholder="E-mail:">
							</div> <!-- .form-group -->
							<div class="form-group">
								<label class="sr-only">Língua pretendida:</label>
								<input type="text" class="form-control input-sm" placeholder="Língua pretendida:">
							</div> <!-- .form-group -->
							<p class="text-right">
								<button class="btn btn-yellow btn-sm" type="submit">ENVIAR</button>
							</p>
						</form>
						<?php
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							) );

						edit_post_link( __( 'Editar', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
						?>
				</div> <!-- .col-md-7 -->
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- .page-matricula -->
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

