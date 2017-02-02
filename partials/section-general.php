<?php 	/*
		* General section for pages
		* Section id is page title in slug form + count of repeater
		* Sections are repeated for each row in repeater
		* Sections will have alt classes if odd section
		*/
?>

<?php if( have_rows('general_section_repeater') ): $count = 0;?>
	<?php while( have_rows('general_section_repeater') ): the_row(); ?>
		<?php 
		// create a slug from section title and count
		$sectionTitle = get_sub_field('headline'); 
		$sectionSlug = strtolower( str_replace( " ", "-", $sectionTitle ) ) . "-" . ( $count++ );
		$sectionClass = "general-section";
		if( $count%2 ) 
			$sectionClass .= " alt";
		?>
		<section id="<?php echo $sectionSlug; ?>" class="<?php echo $sectionClass; ?>">
			<div class="container">
				<div class="row">
					<!-- col-sm-10 to leave room for navigation on the right for non-mobile -->
					<div class="col-sm-10">
						<div class="row">
							<?php // mark whether content section has image or not for spacing.
							if( get_sub_field('featured_image') ): ?>
								<div class="section-content has-image col-sm-8">
							<?php else: ?>
								<div class="section-content no-image">
							<?php endif; ?>
									<h1 class="section-head">
										<?php echo $sectionTitle; ?></h1>
									<?php // subline isn't required
									if( get_sub_field('subline') ): ?>
										<h2 class="section-subhead">
											<?php the_sub_field('subline'); ?></h2>
									<?php endif; ?>
									<hr class="section-splitter">
									<?php the_sub_field('content'); ?>
								</div>
							<?php // featured image isn't required
							if( get_sub_field('featured_image') ): ?>
								<div class="section-image col-sm-4" style="
								background-image: url(<?php the_sub_field('featured_image'); ?>);"></div>
							<?php endif; ?>
						</div><!-- /row -->
					</div><!-- /col-sm-10 -->
					<div class="clearfix"></div>
				</div><!-- /row -->
			</div><!-- /container -->
		</section><!-- #post-## -->
	<?php endwhile; ?>
<?php endif; ?>
