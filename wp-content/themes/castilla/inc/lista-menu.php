
<div class="page-menu">
	<div class="page-extra">
		<div class="container">
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
				<a href="#curso-<?php echo $childrenName; ?>" title="Acesse" class="item item-1"><?php echo $childrenTitle; ?></a>
				<?php
	} // foreach($staff as $s){
		?>
				<a href="#mais-informacoes" title="Acesse" class="item item-1">Mais informações</a>
	</div> <!-- .container -->
</div> <!-- .page-extra -->
</div> <!-- .page-menu -->