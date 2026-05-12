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
                        $target = !empty($navItem->target) ? "target='$navItem->target'" : "";
                        $class = count($navItem->classes)>0 & !empty($navItem->classes[0]) ? "class='".implode(' ', $navItem->classes)."'" : "";
                        $title = !empty($navItem->attr_title) ? "title='$navItem->attr_title'" : (!empty($navItem->description) ? "title='$navItem->description'" : "title='$navItem->title'");
                        
						echo "<a href='$navItem->url' $title $target $class>$navItem->title</a>";
						$countFooter++;
					}
				}
			?>
	</p>
	
	<p><b>SimpleCSS Theme Wordpress</b> 0.4.11 (<a href="https://github.com/FrancescoCeliento/simplecssorg-theme-wordpress" target="_blank">source</a> - <a href="https://github.com/FrancescoCeliento/simplecssorg-theme-wordpress/archive/main.zip">download</a>)</p>
	
</footer>

<?php wp_footer(); ?>
</body>
</html>
