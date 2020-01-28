<?php 

/**
 * Enqueue scripts and styles.
 */
function fivetoolagency_scripts() {

	wp_enqueue_script( 'fivetoolagency-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fivetoolagency-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	wp_enqueue_script( 
		'fivetoolagency-custom-javascript', 
		get_template_directory_uri() . '/dist/main.bundle.js', 
		array(), 
		'20200127', 
		true );
}
add_action( 'wp_enqueue_scripts', 'fivetoolagency_scripts' );