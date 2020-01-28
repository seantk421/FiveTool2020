<?php 
/*
* Callback function to filter the MCE settings
*/

function my_mce_before_init_insert_formats( $init_array ) {  

    // Define the style_formats array
    $style_formats = array(  
    /*
    * Each array child is a format with it's own settings
    * Notice that each array has title, block, classes, and wrapper arguments
    * Title is the label which will be visible in Formats menu
    * Block defines whether it is a span, div, selector, or inline style
    * Classes allows you to define CSS classes
    * Wrapper whether or not to add a new block-level element around any selected elements
    */  array (
            'title' => 'Headers',
            'items' => array(
                array (  
                    'title' => 'H1 with Separator',  
                    'block' => 'h1',  
                    'classes' => 'h-separator'
                ),
                array (  
                    'title' => 'H2 with Separator',  
                    'block' => 'h2',  
                    'classes' => 'h-separator'
                )
            )
        ),
        array (
            'title' => 'Body Copy',
            'items' => array(
                array (  
                    'title' => 'Body Text Large',
                    'block' => 'p',  
                    'classes' => 'is-size-5'
                ),
                array (  
                    'title' => 'Body Text Small',  
                    'block' => 'p',  
                    'classes' => 'is-size-7'
                )
            )
        ),
        array (
            'title' => 'Buttons / Links',
            'items' => array(
                array (  
                    'title' => 'CTA Primary',  
                    'inline' => 'a',  
                    'classes' => 'button is-primary'
                ),
                array (  
                    'title' => 'CTA Secondary',  
                    'inline' => 'a',  
                    'classes' => 'button is-secondary'
                )
            )
        )
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
        
    return $init_array;  
    
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' ); 

// Add format button to mce
function wpb_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'wpb_mce_buttons_2');