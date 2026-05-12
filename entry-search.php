<?php if ( is_singular() ) { 
	echo '<h1 class="post-title entry-title">'.get_the_title().'</h1>';
	} else {
	
		/*if (has_post_thumbnail()) {
		echo '<a href="'.get_permalink().'" title="'.get_the_title().'">';
			the_post_thumbnail();
		echo '</a>';
		}*/
		$excerpt = trim( get_post_field( 'post_excerpt', get_the_ID() ) );
        if (!empty( $excerpt ))
		    echo '<p style="margin-bottom: -1.0rem;"><b><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></b></p>';
	    else
	        echo '<p><b><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></b></p>';

	}?>

<div style="margin-bottom: -1.0rem;">
    <?php the_excerpt(); ?>
</div>

<div class="entry-content">
    <span class="posted-by"><?php echo "Posted by: "; the_author_posts_link(); ?></span>
    <span class="posted-on"><?php echo "Published on: "; the_time('j F Y');?></span>
</div>
