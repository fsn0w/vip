<?php

/**
 * DISABLE PAGE CONTENT
 */



 function remove_content_editor() {
    remove_post_type_support('page', 'editor');
}
add_action('init', 'remove_content_editor');

/**
 * Register Options page for ACF groups
 */

if ( ! function_exists( 'ds_register_theme_option_page' ) ) {
    function ds_register_theme_option_page() {
        if ( function_exists( 'acf_add_options_page' ) ) {
            // Register options page.
            $option_page = acf_add_options_page( array(
                'page_title' => __( 'Theme Options' ),
                'menu_title' => __( 'Theme Options' ),
                'menu_slug'  => 'theme-options',
            ) );
        }
    }
    add_action( 'acf/init', 'ds_register_theme_option_page' );
}

