<?php get_header(); ?>
<div class="container">
    <?php if (is_active_sidebar('sidebar-left')) : ?>
        <div id="sidebar-sinistra" class="sidebar">
            <?php dynamic_sidebar('sidebar-left'); ?>
        </div>
    <?php endif; ?>

    <div id="content" class="content">
        <main>
	        <h1><?php single_term_title(); ?></h1>
	        <?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	            <?php get_template_part( 'entry' ); ?>
            </article>
			
			<?php endwhile; endif; ?>
	        <?php get_template_part( 'nav', 'below' ); ?>
        </main>
    </div>

</div>
<?php get_footer(); ?>
