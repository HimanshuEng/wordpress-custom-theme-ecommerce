<?php

// Load Bootstrap + Google Font
function topsel_scripts() {

    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css'
    );

    wp_enqueue_style(
        'google-font',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap'
    );

    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri()
    );

    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'topsel_scripts');


// Enable featured image
add_theme_support('post-thumbnails');


// Create Custom Post Type for Products
//function create_products_post_type() {
  //  register_post_type('products',
//         array(
//             'labels' => array(
//                 'name' => __('Products'),
//                 'singular_name' => __('Product')
//             ),
//             'public' => true,
//             'supports' => array('title', 'thumbnail')
//         )
//     );
// }
// add_action('init', 'create_products_post_type');

