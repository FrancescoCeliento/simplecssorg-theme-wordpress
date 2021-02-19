<p><?php esc_html_e( 'Categories: ', 'generic' ); the_category( ', ' ); ?></p>
<p><?php the_tags(); ?></p>

<?php if ( comments_open() ) {
	echo '<p><a href="' . esc_url( get_comments_link() ) . '">' . sprintf( esc_html__( 'Comments', 'generic' ) ) . '</a></p>';
} ?>