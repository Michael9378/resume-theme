<?php 	/*
		* Hero section for pages
		* Featured image is background image of section
		*/
?>
<?php if( has_post_thumbnail() ): ?>
	<section class="hero-section has-featured-image" style="
		background-image: url(<?php the_post_thumbnail_url(); ?>);">
<?php else: ?>
	<section class="hero-section">
<?php endif; ?>
		<div class="container">
			<div class="row">
				<!-- col-sm-10 to leave room for navigation on the right for non-mobile -->
				<div class="hero-content col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="center-container"><?php the_content(); ?></div>
				</div><!-- /hero-content -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- #post-## -->
