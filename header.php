<!DOCTYPE html>
<!--
Simple.css Theme Wordpress
Source: https://github.com/FrancescoCeliento/simplecssorg-theme-wordpress
Author: Francesco Celiento
Author URI: https://www.francescoceliento.com
-->
	<html <?php language_attributes(); ?>>
		<head>
			<title><?php bloginfo('name'); echo " - "; bloginfo('description'); ?></title>
			<meta property="og:title" content="<?php if ( is_single() ) {
								single_post_title('', true); 
							} else {
								bloginfo('name');
							} ?>" />
			<meta property="og:type" content="article" />
			<meta property="og:image" content="<?php if ( is_single() ) {
									echo get_the_post_thumbnail_url();
								} else {
									echo get_site_icon_url();
								} ?>" />
			<meta property="og:url" content="<?php if ( is_single() ) {
								get_permalink(); 
							} else {
								bloginfo('url');
							} ?>" />
			<meta property="og:site_name" content="<?php bloginfo('name');?>" />
			<meta property="og:description" content="<?php if ( is_single() ) {
									echo get_the_excerpt(); 
								} else {
									bloginfo('description');
								} ?>" />
			
			
			
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<meta name="viewport" content="width=device-width" />
			<meta name="title" content="<?php if ( is_single() ) {
								single_post_title('', true); 
							} else {
								bloginfo('name');
							} ?>" />
			<meta name="description" content="<?php if ( is_single() ) {
									echo get_the_excerpt(); 
								} else {
									bloginfo('description');
								} ?>" />
			<meta name="contact" content="<?php bloginfo('admin_email'); ?>" />
			<meta name="og:image" content="<?php if ( is_single() ) {
									echo get_the_post_thumbnail_url();
								} else {
									echo get_site_icon_url();
								} ?>" />
			<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); echo " - "; bloginfo('description'); ?>" href="<?php bloginfo('rss_url'); ?>" />
			<?php wp_head(); ?>
		</head>
		<body>
			<header>
				<?php $menuLocations = get_nav_menu_locations();
						$menuID = $menuLocations['main-menu'];
						if ($menuID > 0) {
							$primaryNav = wp_get_nav_menu_items($menuID);
						?>
				<nav>
					<?php foreach ($primaryNav as $navItem) {
								echo '<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
							}
					?>
				</nav>
				<?php } ?>
				<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<p><?php bloginfo( 'description' ); ?></p>
			</header>
