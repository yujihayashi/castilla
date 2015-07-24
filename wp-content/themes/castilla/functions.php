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

add_filter('post_gallery', 'my_post_gallery', 10, 2);
function my_post_gallery($output, $attr) {
    global $post;

    if (isset($attr['orderby'])) {
        $attr['orderby'] = sanitize_sql_orderby($attr['orderby']);
        if (!$attr['orderby'])
            unset($attr['orderby']);
    }

    extract(shortcode_atts(array(
        'order' => 'ASC',
        'orderby' => 'menu_order ID',
        'id' => $post->ID,
        'itemtag' => 'dl',
        'icontag' => 'dt',
        'captiontag' => 'dd',
        'columns' => 3,
        'size' => 'thumbnail',
        'include' => '',
        'exclude' => ''
    ), $attr));

    $id = intval($id);
    if ('RAND' == $order) $orderby = 'none';

    if (!empty($include)) {
        $include = preg_replace('/[^0-9,]+/', '', $include);
        $_attachments = get_posts(array('include' => $include, 'post_status' => 'inherit', 'post_type' => 'attachment', 'post_mime_type' => 'image', 'order' => $order, 'orderby' => $orderby));

        $attachments = array();
        foreach ($_attachments as $key => $val) {
            $attachments[$val->ID] = $_attachments[$key];
        }
    }

    if (empty($attachments)) return '';

    // Here's your actual output, you may customize it to your need
    $output = "<div class=\"galeria-detalhe\">\n";
    $output .= "<ul data-orbit class=\"row\">\n";

    // Now you loop through each attachment
    foreach ($attachments as $id => $attachment) {
        // Fetch the thumbnail (or full image, it's up to you)
//      $img = wp_get_attachment_image_src($id, 'medium');
//      $img = wp_get_attachment_image_src($id, 'my-custom-image-size');
        $img = wp_get_attachment_image_src($id, 'full');

        $output .= "<li class=\"col-md-3 col-sm-4\"><a href=\"{$img[0]}\" style=\"background-image:url({$img[0]});\" class=\"imagem\">\n";
        $output .= "<img src=\"".get_template_directory_uri()."/img/pixel.gif\" class\"pixel\" width=\"{$img[1]}\" height=\"{$img[2]}\" alt=\"\" />\n";
        $output .= "</a></li>\n";
    }

    $output .= "</ul>\n";
    $output .= "</div>\n";

    return $output;
}