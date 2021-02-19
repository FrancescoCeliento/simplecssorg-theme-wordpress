<div id="comments">
	<?php if ( have_comments() ) :
		global $comments_by_type;
		$comments_by_type = separate_comments( $comments );
		if ( ! empty( $comments_by_type['comment'] ) ) :
	?>
		<h2><?php comments_number(); ?></h2>
		<?php if ( get_comment_pages_count() > 1 ) : ?>
			<p class="paginated-comments-links"><?php paginate_comments_links(); ?></p>
		<?php endif; ?>
		<ul>
			<?php wp_list_comments( 'type=comment' ); ?>
		</ul>
		<?php if ( get_comment_pages_count() > 1 ) : ?>
			<p><?php paginate_comments_links(); ?></p>
		<?php endif; ?>
	<?php endif;

	if ( ! empty( $comments_by_type['pings'] ) ) :
		$ping_count = count( $comments_by_type['pings'] );
	?>
		<h2><?php echo '<span class="ping-count">' . esc_html( $ping_count ) . '</span> ' . esc_html( _nx( 'Trackback or Pingback', 'Trackbacks and Pingbacks', $ping_count, 'comments count', 'generic' ) ); ?></h2>
		<ul>
			<?php wp_list_comments( 'type=pings&callback=generic_custom_pings' ); ?>
		</ul>
	<?php endif;
endif;
if ( comments_open() ) { comment_form(); }
?>
</div>