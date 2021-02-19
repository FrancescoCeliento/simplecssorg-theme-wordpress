<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo( 'charset' ); ?>" />
			<meta name="viewport"
    				content="width=device-width" />
			<?php wp_head(); ?>
		</head>
		<body>
			<header>
				<h1>
					<?php echo get_bloginfo( 'name' ); ?></h1>
				<p>
					<?php bloginfo( 'description' ); ?></p>
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
			</header>