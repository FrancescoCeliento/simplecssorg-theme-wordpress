<?php if ( is_singular() ) { 
	echo '<h1>';
	} else {
	echo '<p><b><a href="'.get_permalink().'" title="'.get_the_title().'">';
	}?>

<?php the_title(); ?>

<?php if ( is_singular() ) { 
	echo '</h1>';
	} else {
	echo '</a></b></p>';
	}?>


<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php get_template_part( 'entry', 'meta' ); ?>
<hr>


<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
