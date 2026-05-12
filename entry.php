<?php if ( is_singular() ) { 
	echo '<h1 class="post-title entry-title">'.get_the_title().'</h1>';
	} else {
	
		if (has_post_thumbnail()) {
		echo '<a href="'.get_permalink().'" title="'.get_the_title().'">';
			the_post_thumbnail();
		echo '</a>';
		}

		echo '<header class="entry-header"><h2 class="entry-title"><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h2></header>';

	}?>


<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

<?php get_template_part( 'entry', 'meta' ); ?>


