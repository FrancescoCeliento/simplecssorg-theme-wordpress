<p><?php esc_html_e( 'Categories: ', 'simplecssorg' ); the_category( ', ' ); the_tags(' Tags: ',', '); ?></p>
<?php if ( comments_open() ) {
	echo '<p><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'simplecssorg' ) ) . '</a></p>';
} ?>
