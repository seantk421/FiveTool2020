

<?php
/**
 * Template Name: Five Tool Block Page
 *
 * This is the template that displays all pages by default.
 * This template is for a flexible content layout in ACF
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FiveTool
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
            the_post();
            
            // Display the content on the page

			the_content();

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
