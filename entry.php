<?php if ( is_singular() ) { 
	echo '<h1>'.get_the_title().'</h1>';
	} else {
	
		if (has_post_thumbnail()) {
		echo '<a href="'.get_permalink().'" title="'.get_the_title().'">';
			the_post_thumbnail();
		echo '</a>';
		}

		echo '<p><b><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></b></p>';

	}?>

<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

<?php get_template_part( 'entry', 'meta' ); ?>

<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>

<hr>