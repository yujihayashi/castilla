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
	<? if (get_the_post_thumbnail()) { ?>
	<div class="box-imagem-full" style="">
		<?php echo get_the_post_thumbnail(); ?>
	</div> <!-- .box-imagem -->
	<? } //if (get_the_post_thumbnail( $page )) { ?>
	<div class="page-header">
		<div class="container">
			<header class="entry-header">
				<h2 class="h1">
					Faça o teste!
				</h2>
			</header>
		</div> <!-- .container -->
	</div> <!-- .page-header -->
	<div class="page-teste-prova">
		<div class="container">
			<div class="entry-content">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
						<?php
						the_content();
						?>
						<?php
						wp_link_pages( array(
							'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
							'after'       => '</div>',
							'link_before' => '<span>',
							'link_after'  => '</span>',
							) );

						edit_post_link( __( 'Editar', 'twentyfourteen' ), '<span class="edit-link">', '</span>' );
						?>
					</div>
				</div>
			</div><!-- .entry-content -->
		</div> <!-- .container -->
	</div> <!-- .page-teste-seu-idioma -->