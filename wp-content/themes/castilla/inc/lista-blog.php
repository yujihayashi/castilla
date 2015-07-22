<li class="clearfix <?= (has_post_thumbnail())?'tem-imagem':'sem-imagem';?>">
	<div class="date">
		<span class="day"><?php echo get_the_date('d'); ?></span>
		<span class="month"><?php echo get_the_date('M'); ?></span>
	</div> <!-- .date -->
	<?php if ( has_post_thumbnail() ) { 
		$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>

		<a href="<?php the_permalink(); ?>" title="Leia na íntegra" class="imagem" style="background-image:url(<?php echo $thumbnail_url; ?>);">
			<img src="<?php echo get_template_directory_uri(); ?>/img/pixel.gif" clas="pixel" alt="">
		</a> <!-- .imagem -->
		<?php } //if ( has_post_thumbnail() ) { ?>
		<div class="text">
			<a href="<?php the_permalink(); ?>" title="Leia na íntegra" class="title"><?php the_title(); ?></a> <span class="space"></span>
		</div> <!-- .text -->
		<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' ); ?>
	</li>