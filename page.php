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
		        <h1><?php the_title(); ?></h1>
		        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
		        <?php the_content(); ?>
		        <p><?php wp_link_pages(); ?></div>


		        <?php if ( comments_open() && ! post_password_required() ) { comments_template( '', true ); } ?>
		        <?php endwhile; endif; ?>
        </main>
    </div>

</div>
<?php get_footer(); ?>
