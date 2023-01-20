<footer >
	<p>
		<?php $menuLocations = get_nav_menu_locations();
    		  $menuFooter = $menuLocations['footer-menu'];
				if ($menuFooter > 0) {
					$primaryNav = wp_get_nav_menu_items($menuFooter);
					$countFooter = 0;
					foreach ($primaryNav as $navItem) {
						if ($countFooter > 0) {
							echo ' &ndash; ';
						}
						echo '<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
						$countFooter++;
					}
				}
			?>
	</p>
	
	<p><b>SimpleCSS Theme Wordpress</b> 0.4.8 (<a href="https://github.com/FrancescoCeliento/simplecssorg-theme-wordpress" target="_blank">source</a> - <a href="https://github.com/FrancescoCeliento/simplecssorg-theme-wordpress/archive/main.zip">download</a>)</p>
	
</footer>

<?php wp_footer(); ?>
</body>
</html>
