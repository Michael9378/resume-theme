<nav id="single-page-nav">
	<div class="container">
	<?php if( has_nav_menu('home-scroll') ): ?>
		<?php 
		wp_nav_menu( 
			array( 
				'menu_class' => 'scroll-menu animate-in',
				'theme_location' => 'home-scroll', 
				'container_class' => 'scroll-menu-container hidden-xs hidden-sm' ) ); ?>
	<?php else: ?>
		<!-- no home-scroll menu. Make menu from jquery sections as best as we can -->


	<?php endif; ?>
	</div>
</nav>