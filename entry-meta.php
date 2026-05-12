<div class="entry-content">
    <span class="posted-by"><?php echo "Posted by: "; the_author_posts_link(); ?></span>
    <span class="posted-on"><?php echo "Published on: "; the_time('j F Y');?></span>

    <?php if ( is_singular() ) { ?>
        <br />
        <?php if (get_the_category()) { ?>
        <span class="post-categories"><?php esc_html_e( 'Categories: ', 'simplecssorg' ); the_category( ', ' ); ?></span>
        <?php } ?>
        <?php if (get_the_tags()) { ?>
        <span class="post-tags"><?php esc_html_e( 'Tags: ', 'simplecssorg' ); the_tags('',', ' ); ?></span>
        <?php } ?>
        <?php if ( comments_open() ) {
            echo '<p><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'simplecssorg' ) ) . '</a></p>';
        } ?>
    <?php } ?>
</div>


