<?php get_header(); ?>
<div class="container">
    <?php if (is_active_sidebar('sidebar-left')) : ?>
        <div id="sidebar-sinistra" class="sidebar">
            <?php dynamic_sidebar('sidebar-left'); ?>
        </div>
    <?php endif; ?>

    <div id="content" class="content">
        <main>
		        <h2><?php single_term_title(); ?></h2>
		        <?php if ( '' != the_archive_description() ) { echo "<p><b>".esc_html( the_archive_description() )."</b></p>"; } ?></div>
		        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        <?php get_template_part( 'entry' ); ?>
	        <?php endwhile; endif; ?>
	        <?php get_template_part( 'nav', 'below' ); ?>
        </main>
    </div>

</div>
<?php get_footer(); ?>
