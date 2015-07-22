<?
add_theme_support( 'post-thumbnails' ); 

//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
			return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
		return $the_template;' )
);

if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { 
	function social_share_castilla( ) {
		echo "<div class='post-share'><span class='trace-start'></span><div class='share-content'>";
		ADDTOANY_SHARE_SAVE_KIT( array( 'linkname' => get_the_title(), 'linkurl' => get_the_permalink() ) );
		echo "</div><!-- .share-content --><span class='trace-end'></span></div> <!-- .post-share -->";
	}
}

if(function_exists('bcn_display')) {
	function castilla_breadcrumb () {
		echo '<div class="site-breadcrumb"><div class="container"><ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">';
		bcn_display();
		echo '</ul></div> <!-- .container --></div> <!-- .site-breadcrumb -->';
	}
}

function castilla_paginacao( $query=null ) {

	global $wp_query;
	$query = $query ? $query : $wp_query;
	$big = 999999999;

	$paginate = paginate_links( array(
		'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
		'type' => 'array',
		'total' => $query->max_num_pages,
		'format' => '?paged=%#%',
	'show_all'           => True,
		'current' => max( 1, get_query_var('paged') ),
		'prev_text'          => __('<i class="fa fa-chevron-left"></i>'),
		'next_text'          => __('<i class="fa fa-chevron-right"></i>'),
		)
	);

	if ($query->max_num_pages > 1) :
		?>
	<ul class="pagination">
		<?php
		foreach ( $paginate as $page ) {
			echo '<li>' . $page . '</li>';
		}
		?>
	</ul>
	<?php
	endif;
}

