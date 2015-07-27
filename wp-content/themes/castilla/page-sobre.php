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
	<?php 
$my_wp_query = new WP_Query(  );
$all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => -1, 'orderby' => 'menu_order',
	'order'   => 'ASC'));

$staff = get_page_children(get_page_by_title(get_the_title())->ID, $all_wp_pages);

foreach($staff as $s){
	$page = $s->ID;
	$page_data = get_page($page);
	$content = $page_data->post_content;
			// print_r($page_data);
	$childrenPermalink = get_page_uri($page_data);
	$childrenName = $page_data->post_name;
	$childrenTitle = $page_data->post_title;
	$content = apply_filters('the_content',$content);
	$content = str_replace(']]>', ']]>', $content);

	?>
	<div id="curso-<?php echo $childrenName; ?>" class="page-filho-<?php echo $childrenName; ?>">
		<div class="page-header">
			<div class="container">
				<h2 class="h3"><?php echo $childrenTitle; ?></h2>
			</div>
		</div>
		<? if ($content) { ?>
		<div class="container">
			<div class="entry-content">
				<?php echo $content; ?>
			</div>
		</div>
		<? } // if ($content) { ?>
		<? if (get_the_post_thumbnail( $page )) { ?>
		<div class="box-imagem-full" style="">
			<?php echo get_the_post_thumbnail( $page ); ?>
		</div> <!-- .box-imagem -->
		<? } //if (get_the_post_thumbnail( $page )) { ?>
	</div> <!-- .page-filho-<?php echo $childrenName; ?> -->
	<?php
	} // foreach($staff as $s){
		?>
	<div class="box-imagem-full" style="background-image:url();">
		<img src="<?php echo get_template_directory_uri(); ?>/img/sobre.jpg" class="" alt="">
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

