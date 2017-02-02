<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'partials/section', 'hero' ); ?>
			<?php get_template_part( 'partials/section', 'general' ); ?>

		<?php endwhile; ?>

	<?php else : ?>

		<?php get_template_part( 'partials/section', 'no-results' ); ?>

	<?php endif; ?>

<?php get_footer(); ?>