<?php 

// Add your author styles
function ft_authoring_styles() {
    add_editor_style( '/dist/author.bundle.css' );
}
add_action( 'init', 'ft_authoring_styles' );


/**
 * Enqueue styles.
 */
function ft_styles() {
    // wp_enqueue_style( 'fivetoolagency-style', get_stylesheet_uri() );
    
    wp_enqueue_style( 
        'fivetoolagency-custom-styling', 
        get_template_directory_uri() . '/dist/main.bundle.css', 
        array(), 
        '20200127');
}
add_action( 'wp_enqueue_scripts', 'ft_styles' );