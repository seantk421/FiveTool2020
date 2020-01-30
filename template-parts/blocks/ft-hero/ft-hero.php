<?php 
// Default block classes
$blockClass = '';

// Define the hero layout  
// Add hero layout to the block wrapping class for custom styling.
if($hero_layout = get_field('ft_hero_layout')) {
    $blockClass .= ' ' . $hero_layout;
}

$styleString = '';
// TODO: Check for advanced block options

// Create id attribute allowing for custom "anchor" value.
$id = 'ft-hero-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'ft-hero';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
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
                    if($styleString == '') {
                        $styleString .= ' style="background-image: URL(' . $backgroundImage['url'] . ')"';
                    }
                }

            ?>

            <!-- FT Standard Hero -->
            <section id="<?php echo $id; ?>" class="<?php echo $blockClass . ' ' . $className ?> bkg-cover" <?php echo $styleString ?>>
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


