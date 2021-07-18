<?php

// add_action( 'wp_enqueue_scripts', 'eif_enqueue_styles' );

// function eif_enqueue_styles() {
//     wp_enqueue_style( 'child-style', get_stylesheet_uri(),
//         array( 'twentytwenty-style' ),
//         wp_get_theme()->get('Version') // this only works if you have Version in the style header
//     );
// }


add_action('wp_enqueue_scripts', 'eif_enqueue_styles_2');
function eif_enqueue_styles_2()
{
    $parenthandle = 'twentytwenty-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
    $theme = wp_get_theme();
    wp_enqueue_style(
        $parenthandle,
        get_template_directory_uri() . '/style.css',
        array(),  // if the parent theme code has a dependency, copy it to here
        $theme->parent()->get('Version')
    );
    wp_enqueue_style(
        'child-style',
        get_stylesheet_uri(),
        array($parenthandle),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

function eif_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sponsor Widgets', 'twentytwenty-eif' ),
    'id'            => 'sponsors',
    'description'   => __( 'ere to appear in your footer area.', 'twenty-fifteen-child' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ) );
}
add_action( 'widgets_init', 'eif_widgets_init' );
