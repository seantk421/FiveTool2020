<?php 
// Default block classes
$blockClass = 'ft-hero ft-block';

// Define the hero layout  
// Add hero layout to the block wrapping class for custom styling.
if($hero_layout = get_sub_field('ft_hero_layout')) {
    $blockClass .= ' ' . $hero_layout;
}

$styleString = '';
// TODO: Check for advanced block options

if($hero_layout === 'ft-hero-st') {
    
    // ********
    // Standard hero layout
    // *******
    if( have_rows('ft_hero_standard_gr') ):
        while( have_rows('ft_hero_standard_gr') ): the_row(); ?>
            <?php 
                
                // Add the background image specified at the block level
                if($backgroundImage = get_sub_field('ft_hero_bkg_img')) {
                    if($styleString == '') {
                        $styleString .= ' style="background-image: URL(' . $backgroundImage['url'] . ')"';
                    }
                }

            ?>

            <!-- FT Standard Hero -->
            <section class="<?php echo $blockClass ?> bkg-cover" <?php echo $styleString ?>>
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


