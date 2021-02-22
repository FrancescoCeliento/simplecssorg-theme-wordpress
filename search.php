<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : ?>
		<?php get_search_form(); ?>	
		<h1><?php printf( esc_html__( 'Search Results for: %s', 'generic' ), get_search_query() ); ?></h1>
		<hr>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php endwhile; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
		<?php else : ?>
		<h1><?php esc_html_e( 'Nothing Found', 'generic' ); ?></h1>
		<p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'generic' ); ?></p>
		<p><?php get_search_form(); ?></p>
	
	<?php endif; ?>
</main>
<?php get_footer(); ?>
