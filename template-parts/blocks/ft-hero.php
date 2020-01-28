<?php 
$blockClass = 'ft-hero ft-block';

// Define the hero layout  
// Add hero layout to the block wrapping class for custom styling.
$hero_layout = get_sub_field('ft_hero_layout');
if($hero_layout) {
    $blockClass .= ' ' . $hero_layout;
}

if($hero_layout === 'ft-hero-st') {
    
    // ********
    // Standard hero layout
    // *******
    if( have_rows('ft_hero_standard_gr') ):
        while( have_rows('ft_hero_standard_gr') ): the_row(); ?>

            <section class="<?php echo $blockClass ?>">
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


