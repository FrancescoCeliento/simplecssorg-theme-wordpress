<?php get_header(); ?>
<?php global $post; ?>
<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
	<?php edit_post_link(); ?>
	<?php get_template_part( 'entry', 'meta' ); ?>
	<a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>" title="<?php printf( esc_attr__( 'Return to %s', 'generic' ), esc_attr( get_the_title( $post->post_parent ), 1 ) ); ?>">
				<?php printf( esc_attr__( '%s Return to ', 'generic' ), '<span class="meta-nav">&larr;</span>' ); ?>
				<?php echo wp_kses_post( get_the_title( $post->post_parent ) ); ?>
	</a>
	<p><?php previous_image_link( false, '&lsaquo;' ); ?></p>
	<p>next_image_link( false, '&rsaquo;' ); ?></p>
	
	<?php if ( wp_attachment_is_image( $post->ID ) ) : $att_image = wp_get_attachment_image_src( $post->ID, 'full' ); ?>
				<p><a href="<?php echo esc_url( wp_get_attachment_url( $post->ID ) ); ?>"
 						title="<?php the_title_attribute(); ?>">
						<img src="<?php echo esc_url( $att_image[0] ); ?>"
							width="<?php echo esc_attr( $att_image[1] ); ?>"
   							height="<?php echo esc_attr( $att_image[2] ); ?>"
   							class="attachment-full"
   							alt="<?php $post->post_excerpt; ?>"/>
					</a>
				</p>
	<?php else : ?>
				<a href="<?php echo esc_url( wp_get_attachment_url( $post->ID ) ); ?>"
 					title="<?php echo esc_attr( get_the_title( $post->ID ), 1 ); ?>">
					<?php echo esc_url( basename( $post->guid ) ); ?>
				</a>
	<?php endif; ?>
	

	<?php comments_template(); ?>
	<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>