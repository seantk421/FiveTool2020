<?php 
// Default block classes
$blockClass = 'ft-hero ft-block';

// Create a unique id for this module.
$id = 'ft-hero-' . substr(uniqid(rand(), true), 4, 4); 

// Check for additional classes and styles to return strings which
// will be added to the block
$blockClass .= ftGetBlockClasses();
$blockStyle = ftGetBlockStyles();


// Define the hero layout  
// Add hero layout to the block wrapping class for custom styling.
if($hero_layout = get_sub_field('ft_hero_layout')) {
    $blockClass .= ' ' . $hero_layout;
}

if($hero_layout === 'ft-hero-st') {
    
    // ********
    // Standard hero layout
    // *******
    if( have_rows('ft_hero_standard_gr') ):
        while( have_rows('ft_hero_standard_gr') ): the_row(); ?>
            <?php 
                
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

            <!-- FT Standard Hero -->
            <section id="<?php echo $id; ?>" class="<?php echo $blockClass; ?> ft-bkg-vis bkg-cover" <?php echo $blockStyle ?>>
                <div class="container">
                    <?php if($heroContent = get_sub_field('ft_hero_content')) {
                        echo $heroContent;
                    } ?>
                </div>
            </section>
            
        <?php endwhile;
    endif;

}

?>


