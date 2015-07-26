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
<?php if ( has_post_thumbnail() ) { 
	$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
	<div class="box-imagem-full" style="">
		<img src="<?php echo $thumbnail_url; ?>" class="" alt="Unidade - <?php the_title(); ?>">
	</div> <!-- .box-imagem -->
	<?php } //if ( has_post_thumbnail() ) { ?>
	<?php get_template_part( 'inc/lista', 'unidades' ); ?>
	<?php
				// Start the Loop.
	while ( have_posts() ) : the_post();
	?>
	<div class="container">
		<div class="entry-content">
			<div class="media single-unidade">
				<?php if ( has_post_thumbnail() ) { 
					$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<span class="pull-left img-thumbnail box-img">
						<a href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $thumbnail_url; ?>);" class="imagem" title="Unidade - <?php the_title(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" alt="pixel" class="pixel"></a>
					</span>
					<?php } //if ( has_post_thumbnail() ) { ?>
					<div class="media-body">
						<? edit_post_link( __( 'Editar', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
						<?php the_content(); ?>
					</div> <!-- .media-body -->
				</div> <!-- .media -->
			</div> <!-- .entry-content -->
		</div> <!-- .container -->
		<?php 
		if (has_excerpt()) {
			?>
			<div class="page-mapa clearfix">
				<?php echo do_shortcode(get_the_excerpt());  ?>
			</div> <!-- .page-mapa -->
			<?php
		}
		?>
		<?php					
		endwhile;
		?>



		<?php
		get_footer();
