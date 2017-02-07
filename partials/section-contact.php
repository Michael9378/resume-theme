<?php 	/*
		* Contact section for pages
		* Contact has a left editable field and right to display form
		*/
?>
<section id="contact-section" class="animate-in">
	<div class="container">
		<div class="row">
			<div class="col-md-5 contact-info">
				<h2 class="section-head"><?php the_field('contact_header'); ?></h2>
				<?php if( get_field('contact_subheader') ): ?>
					<?php the_field('contact_subheader'); ?>
				<?php endif; ?>
				<?php if( have_rows('social_icons') ): ?>
					<div class="social-icons">
						<?php while( have_rows('social_icons') ): the_row(); ?>
							<a href="<?php the_sub_field('link') ?>" class="social-link" target="_new">
								<i class="fa fa-<?php the_sub_field('icon') ?>"></i>
							</a>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>

			</div>
			<div class="col-md-5 contact-form">
				<?php the_field('contact_form'); ?>
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
</section><!-- #post-## -->
