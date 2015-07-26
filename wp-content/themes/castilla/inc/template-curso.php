<div class="page-header">
	<div class="container">
		<header class="entry-header">
			<h2 class="h1">
				<?php
				the_title();

				?>
				<small>Aprenda de forma rápida com o Castilla. <?php edit_post_link( __( 'Editar', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?></small>
			</h2>
		</header>
	</div> <!-- .container -->
</div> <!-- .page-header -->
<?php get_template_part( 'inc/lista', 'menu' ); ?>
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
				<h2 class="h1"><?php echo $childrenTitle; ?></h2>
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
		<div id="curso-mais-informacoes">
			<div class="page-header">
				<div class="container">
					<h2 class="h1">MAIS INFORMAÇÕES</h2>
				</div> <!-- .container -->
			</div> <!-- .page-header -->
			<div class="page-info">
				<div class="container">
					<div class="row">
						<div class="col-md-7 col-md-offset-5 col-sm-6 col-sm-offset-6">
							<div class="entry-content">
								<?php
								the_content();
								?>
							</div><!-- .entry-content -->
							
						</div> <!-- .col-md-7 -->
					</div> <!-- .row -->
				</div> <!-- .container -->
			</div> <!-- .page-info -->
		</div> <!-- #curso-mais-informacoes -->