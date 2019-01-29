<?php
/**
 * Enqueue scripts and styles.
 */
 
function qod_scripts() {
	wp_enqueue_style( 'qod-style', get_stylesheet_uri() );
	wp_enqueue_style( 'qod-font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css' );

	wp_enqueue_script( 'qod-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	$script_url = get_template_directory_uri() . '/build/js/api.min.js';
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'qod_api_js', $script_url, array( 'jquery' ), false, true );
	wp_localize_script( 'qod_api_js', 'qod_vars', array(
       'rest_url' => esc_url_raw( rest_url() ),
       'wpapi_nonce' => wp_create_nonce( 'wp_rest' ),
	   'post_id' => get_the_ID(),
	   'root_dir' => home_url(),
	) );

	wp_enqueue_script( 'qod_main_js', get_template_directory_uri() . '/build/js/main.min.js', array( 'jquery' ), false, true );
}
add_action( 'wp_enqueue_scripts', 'qod_scripts' );

?>