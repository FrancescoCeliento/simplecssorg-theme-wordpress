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
                <article>
                    <p>
                        <a href="<?php the_permalink(); ?>"><?php echo get_the_date(); ?></a>
                    </p>
                    <p>
                        <?php echo get_the_title(); ?>
                    </p>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            <?php endwhile; endif; ?>
            <?php get_template_part( 'nav', 'below' ); ?>
        </main>
    </div>

</div>
<?php get_footer(); ?>
