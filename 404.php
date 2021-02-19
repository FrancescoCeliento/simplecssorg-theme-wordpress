<?php get_header(); ?>
<main>
	<h1><?php esc_html_e( 'Not Found', 'generic' ); ?></h1>
	<p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'generic' ); ?></p>
			<?php get_search_form(); ?>
</main>
<?php get_footer(); ?>