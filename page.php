<?php get_header(); ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
		<?php the_content(); ?>
		<p><?php wp_link_pages(); ?></div>


		<?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
		<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>