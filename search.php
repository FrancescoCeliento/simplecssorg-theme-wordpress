<?php get_header(); ?>
<div class="container">
    <?php if (is_active_sidebar('sidebar-left')) : ?>
        <div id="sidebar-sinistra" class="sidebar">
            <?php dynamic_sidebar('sidebar-left'); ?>
        </div>
    <?php endif; ?>

    <div id="content" class="content">
        <main>

            <?php if ( have_posts() ) : ?>

                <header class="page-header">
                    <h1 class="page-title">
                        <?php printf(
                            esc_html__( 'Search Results for: %s', 'generic' ),
                            '<span>' . esc_html( get_search_query() ) . '</span>'
                        ); ?>
                    </h1>
                </header>

                <?php while ( have_posts() ) : the_post(); ?>

                    
                        <?php get_template_part( 'entry','search' ); ?>
                    
                        <hr/>
                <?php endwhile; ?>

                <?php get_template_part( 'nav', 'below' ); ?>

            <?php else : ?>

                <article class="no-results not-found">
                    <header class="page-header">
                        <h1 class="page-title">
                            <?php esc_html_e( 'Nothing Found', 'generic' ); ?>
                        </h1>
                    </header>

                    <div class="page-content">
                        <p><?php esc_html_e( 'Sorry, nothing matched your search. Please try again.', 'generic' ); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                </article>

            <?php endif; ?>

        </main>
    </div>

</div>
<?php get_footer(); ?>

