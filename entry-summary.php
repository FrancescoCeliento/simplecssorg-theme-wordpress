<?php the_excerpt(); ?>
<?php if ( is_search() ) { ?>
	<p><?php wp_link_pages(); ?></p>
<?php } ?>