<?php get_header(); ?>
<div class="container">
    <?php if (is_active_sidebar('sidebar-left')) : ?>
        <div id="sidebar-sinistra" class="sidebar">
            <?php dynamic_sidebar('sidebar-left'); ?>
        </div>
    <?php endif; ?>

    <div id="content" class="content">
        <main>
	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	        <?php get_template_part( 'entry' ); ?>
	        <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
	        <?php endwhile; endif; ?>
	        <?php get_template_part( 'nav', 'below-single' ); ?>
        </main>
    </div>

</div>
<?php get_footer(); ?>
