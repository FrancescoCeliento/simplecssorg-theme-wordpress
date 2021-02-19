<?php if ( has_post_thumbnail() and false) : ?>
<a href="<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); echo esc_url( $src[0] ); ?>"
	title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); ?></a>
<?php endif; ?>
<meta itemprop="description" content="<?php echo get_the_excerpt(); ?>" />
<?php the_content(); ?><br>
<?php wp_link_pages(); ?>