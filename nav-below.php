<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s precedenti', 'generic' ), '<span class="meta-nav">&larr;</span>' ),
'next_text' => sprintf( esc_html__( 'successivi %s', 'generic' ), '<span class="meta-nav">&rarr;</span>' )
);
the_posts_navigation( $args );

?>
