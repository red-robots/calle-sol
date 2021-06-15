<div class="burger">
	<span></span>
</div>

<nav class="mobilemenu">
	<?php wp_nav_menu( array( 
		'theme_location' => 'primary', 
		'menu_id' => 'primary',
		'container' => 'ul',
		'container_class' => 'main'
	) ) ?>
</nav>

<nav id="site-navigation" class="main-navigation" role="navigation">
	<div class="desktop">
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary' ) ); ?>
	</div>
</nav><!-- #site-navigation -->