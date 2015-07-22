<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

	<h1 class="page-title">Nada encontrado.</h1>

<div class="page-content">
	<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

	<p>Pronto para publicar seu primeiro post? <a href="<? echo admin_url( 'post-new.php' ); ?>">Clique aqui</a> para publicar um post.</p>

	<?php elseif ( is_search() ) : ?>

	<p>Desculpe, mas não foram encontrados nenhum termo com as palavras que você utilizou na busca. Por favor, tente novamente utilizando palavras diferentes.</p>
	<?php get_search_form(); ?>

	<?php else : ?>

	<p>Parece que não encontramos o que você busca. Quem sabe uma nova busca não lhe ajude?</p>
	<?php get_search_form(); ?>

	<?php endif; ?>
</div><!-- .page-content -->
