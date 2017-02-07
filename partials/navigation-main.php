<nav id="single-page-nav">
<?php if( has_nav_menu('home-scroll') ): ?>
	<?php 
	wp_nav_menu( 
		array( 
			'menu_class' => 'scroll-menu',
			'theme_location' => 'extra-menu', 
			'container_class' => 'scroll-menu-container' ) ); ?>
<?php else: ?>
	<!-- no home-scroll menu. Make menu from jquery sections as best as we can -->


<?php endif; ?>
</nav>