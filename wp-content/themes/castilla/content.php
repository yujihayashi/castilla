<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?//php twentyfourteen_post_thumbnail(); ?>

	<header class="entry-header">
		<?php

		if ( is_single() ) :
			the_title( '<h1 class="entry-title text-primary">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		?>

		<div class="entry-meta">
			<?php
			if ( 'post' == get_post_type() ) {

				if ( is_single() && !in_category('modalidades')  ) :
						// twentyfourteen_posted_on();
					endif;
			}

			if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) :
				/*<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment', 'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>*/
			?>
			<?php
			endif;

			edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
			?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
<?php elseif ( is_category() ) : ?>
	<div class="entry-content">
		<?php
		the_excerpt();
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->
	<?php else : ?>
	<div class="entry-content">
		<?php social_share_castilla( ); ?>
		<?php if (get_post_meta($post->ID, 'youtube_id', true)) { ?>
		<div class="embed-responsive embed-responsive-16by9">
			<iframe src="http://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'youtube_id', true); ?>" width="588" height="331" class="embed-responsive-item" frameborder="0" allowfullscreen></iframe>
		</div>
		<? } ?>
		<?php
		the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ) );
		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			) );
			?>
		</div><!-- .entry-content -->
	<?php endif; ?>

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">Tags: ', ', ', '</span></footer>' ); ?>
</article><!-- #post-## -->
