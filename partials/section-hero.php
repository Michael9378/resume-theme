<?php 	/*
		* Hero section for pages
		* Featured image is background image of section
		*/
?>
<?php if( has_post_thumbnail() ): ?>
	<section id="hero-section" class="has-featured-image" style="
		background-image: url(<?php the_post_thumbnail_url(); ?>);">
<?php else: ?>
	<section id="hero-section">
<?php endif; ?>
		<div class="container">
			<div class="row">
				<!-- col-sm-10 to leave room for navigation on the right for non-mobile -->
				<div class="hero-content animate-in col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
					<div class="rel-100">
						<div class="center-container">
							<h1><?php the_field('hero_header');?></h1>
							<?php if( get_field('hero_subheader') ): ?>
								<h2><?php the_field('hero_subheader');?></h2>
							<?php endif; ?>
							<?php if( have_rows('hero_ctas') ): ?>
								<hr>
								<div class="row">
								<?php $cols = 12/(count( get_field('hero_ctas') ) ); ?>
								<?php while( have_rows('hero_ctas') ): the_row(); ?>
									<div class="col-sm-<?php echo $cols; ?>">
										<a href="<?php the_sub_field('cta_link'); ?>" target="_new">
											<h4><?php the_sub_field('cta_title'); ?></h4>
										</a>
									</div>								
								<?php endwhile; ?>
								</div>
							<?php endif; ?>

						</div>
					</div>
				</div><!-- /hero-content -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- #post-## -->
