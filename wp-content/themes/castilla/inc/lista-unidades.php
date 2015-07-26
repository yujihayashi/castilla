<div class="page-header">
	<div class="container">
		<header class="entry-header">
			<h2 class="h1">
				Clique em uma unidade
			</h2>
		</header>
	</div> <!-- .container -->
</div> <!-- .page-header -->
<div class="container">
	<div class="entry-content">
		<?php 
				// global $post;
		$args = array( 'posts_per_page' => get_option( 'posts_per_page' ), 'category_name' => 'unidades' );
$postslist = new WP_Query( $args );
if ( have_posts() ) : ?>
<ul class="row aba-unidades">
	<?php
						// Start the Loop.
	while ( $postslist->have_posts() ) : $postslist->the_post(); 
					// while ( have_posts() ) : the_post();
	?>
	<li class="col-md-4 col-sm-4 unidade"><a href="<?php the_permalink(); ?>"><span class="text"><?php the_title(); ?></span><span class="space"></span></a></li>
	<?php
	endwhile;
					// endforeach;
					// twentyfourteen_paging_nav();

	?>
</ul>
<?php //castilla_paginacao(); ?>
<?php
wp_reset_postdata();
else :
						// If no content, include the "No posts found" template.
	get_template_part( 'content', 'none' );

endif;
?>
</div> <!-- .entry-content -->
</div>