<?php get_header(); ?>
<div class="container">
    <?php if (is_active_sidebar('sidebar-left')) : ?>
        <div id="sidebar-sinistra" class="sidebar">
            <?php dynamic_sidebar('sidebar-left'); ?>
        </div>
    <?php endif; ?>
    <div id="content" class="content">
        <main>
	        <article class="no-results not-found">
                    <header class="page-header">
                        <h1 class="page-title">
                            <?php esc_html_e( 'Not Found', 'generic' ); ?>
                        </h1>
                    </header>

                    <div class="page-content">
                        <p><?php esc_html_e( 'Nothing found for the requested page. Try a search instead?', 'generic' ); ?></p>
                        <?php get_search_form(); ?>
                    </div>
                </article>
        </main>
    </div>
</div>
<?php get_footer(); ?>
