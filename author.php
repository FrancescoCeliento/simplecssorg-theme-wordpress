<?php get_header(); ?>
<main>
		<?php the_post(); ?>
		<h1>Author: <?php the_author_link(); ?></h1>
		<p><?php if ( '' != get_the_author_meta( 'user_description' ) ) { echo esc_html( get_the_author_meta( 'user_description' ) ); } ?></p>
		<?php rewind_posts(); ?>
		<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php endwhile; ?>
		<?php get_template_part( 'nav', 'below' ); ?>
</main>
<?php get_footer(); ?>