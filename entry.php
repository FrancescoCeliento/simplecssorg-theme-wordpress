<?php if ( is_singular() ) { 
	echo '<h1>';
	} else {
	echo '<p><a href="'.get_permalink().'" title="'.get_the_title().'">';
	}?>

<?php the_title(); ?>

<?php if ( is_singular() ) { 
	echo '</h1>';
	} else {
	echo '</a><br>';
	}?>


<?php get_template_part( 'entry', ( is_front_page() || is_home() || is_front_page() && is_home() || is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
<?php if ( ! is_search() ) { get_template_part( 'entry', 'meta' ); } ?></p>
<hr>


<?php if ( is_singular() ) { get_template_part( 'entry-footer' ); } ?>
