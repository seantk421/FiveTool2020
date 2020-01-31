<?php 
// Default block classes
$blockClass = 'ft-hero ft-block';

// Create a unique id for this module.
$blockID = ftGetBlockID();

// Check for additional classes and styles to return strings which
// will be added to the block
$blockClass .= ftGetBlockClasses();
$blockStyle = ftGetBlockStyles();

$hero_layout = get_sub_field('ft_hero_layout');
// Define the hero layout  
// Add hero layout to the block wrapping class for custom styling.

$blockClass .= ' ' . $hero_layout;

 // Add the background image specified at the block level
 if($backgroundImage = get_sub_field('ft_hero_bkg_img')) {
    if($blockStyle == '') {
        $blockStyle .= ' style="background-image: URL(' . $backgroundImage['url'] . ')"';
    } else {
        // remove the last " in the string and append the backgrund image.
        $blockStyle = rtrim($blockStyle, '"');
        $blockStyle .= ' background-image: URL(' . $backgroundImage['url'] . ')"';
    }
}

?>
<section id="<?php echo $blockID; ?>" class="<?php echo $blockClass; ?> ft-bkg-vis bkg-cover" <?php echo $blockStyle ?>>

<?php
if($hero_layout === 'ft-hero-st') {
    
    // ********
    // Standard hero layout
    // *******
    if( have_rows('ft_hero_standard_gr') ):
        while( have_rows('ft_hero_standard_gr') ): the_row();        
        
        get_template_part('./template-parts/blocks/hero-templates/hero-standard');
            
        endwhile;
    endif;   

}



if($hero_layout === 'ft-hero-hp') {
    // ********
    // Homepage hero layout
    // *******
    if( have_rows('ft_hero_homepage_gr') ):
        while( have_rows('ft_hero_homepage_gr') ): the_row();
            
        get_template_part('./template-parts/blocks/hero-templates/hero-homepage');
          
        endwhile;
    endif;
}

?>

</section>



