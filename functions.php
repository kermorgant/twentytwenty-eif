<?php

// add_action( 'wp_enqueue_scripts', 'eif_enqueue_styles' );

// function eif_enqueue_styles() {
//     wp_enqueue_style( 'child-style', get_stylesheet_uri(),
//         array( 'twentytwenty-style' ),
//         wp_get_theme()->get('Version') // this only works if you have Version in the style header
//     );
// }


add_action( 'wp_enqueue_scripts', 'eif_enqueue_styles_2' );
function eif_enqueue_styles_2() {
    $parenthandle = 'twentytwenty-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/build/tailwindcss.css',
        array()  // if the parent theme code has a dependency, copy it to here
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}
