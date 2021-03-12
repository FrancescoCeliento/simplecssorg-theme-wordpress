<?php get_header(); ?>
<main>
		<h1><?php single_term_title(); ?></h1>
		<?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?>
		<hr>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_footer(); ?>
