<?php
/**
 * Template Name: Modular Page
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
        
            // open the WordPress loop
            if (have_posts()) : 
                
                while (have_posts()) : the_post();
                    
                    // are there any rows within within our flexible content?
                    if( have_rows('ft_page_blocks') ): 
                        
                        // loop through all the rows of flexible content
                        while ( have_rows('ft_page_blocks') ) : the_row();
                        
                            $block_layout 	 = str_replace("_","-",get_row_layout());

                            // Echo the block layout if you need to see what block you are using to match it with a template file
                            // echo $block_layout;
                            
                            // Include the correct template for each module added to the page.
                            get_template_part('./template-parts/blocks/'.$block_layout);
                        
                        endwhile; // close the loop of flexible content
                    
                    endif; // close flexible content conditional
                
                endwhile; 

            endif; // close the WordPress loop

        ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
