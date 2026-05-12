<?php get_header(); ?>
<div class="container">
    <?php if (is_active_sidebar('sidebar-left')) : ?>
        <div id="sidebar-sinistra" class="sidebar">
            <?php dynamic_sidebar('sidebar-left'); ?>
        </div>
    <?php endif; ?>

    <div id="content" class="content">
        <main>
		        <?php the_post(); ?>
		        <h1>Articoli di <?php the_author_link(); ?></h1>
		        <?php if ( '' != get_the_author_meta( 'user_description' ) ) { echo esc_html( get_the_author_meta( 'user_description' ) ); } ?>
		        <hr>
		        <?php rewind_posts(); ?>
		        <?php while ( have_posts() ) : the_post(); ?>
		        <?php get_template_part( 'entry' ); ?>
		        <?php endwhile; ?>
		        <?php get_template_part( 'nav', 'below' ); ?>
        </main>
    </div>

</div>
<?php get_footer(); ?>
