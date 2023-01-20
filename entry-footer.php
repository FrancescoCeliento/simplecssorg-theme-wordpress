<?php if (get_the_category()) { ?>
<p><?php esc_html_e( 'Categories: ', 'simplecssorg' ); the_category( ', ' ); ?></p>
<?php } ?>
<?php if (get_the_tags()) { ?>
<p><?php esc_html_e( 'Tags: ', 'simplecssorg' ); the_tags('',', ' ); ?></p>
<?php } ?>
<?php if ( comments_open() ) {
	echo '<p><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'simplecssorg' ) ) . '</a></p>';
} ?>