<?php

/**
 * Generate Custom Post Type
 */
function generatePostType() {
    register_post_type('tutoriel',
    [
        'label' => 'Tutoriels',
        'public' => true,
        'hierarchical' => false,
        'menu_icon' => 'dashicons-video-alt3',
        'menu_position' => 5,
        'show_in_rest' => true,
        'supports' => [
            'title',
            'editor',
            'comments',
            'excerpt',
            'thumbnail',
            'author',
        ],
    ]);
}

add_action( 'init', 'generatePostType', 0 );

/**
 * Get custom post type tutoriel for the single-tutoriel page
 */
function getTutorielPosts() {
    if ( get_query_var( 'paged' ) ) {
        $paged = get_query_var( 'paged' );
    } else if ( get_query_var( 'page' ) ) {
        // This will occur if on front page.
        $paged = get_query_var( 'page' );
    } else {
        $paged = 1;
    }
    $args = [
        'post_type'=> 'tutoriel',
        'post_per_page' => 5,
        'order_by' => 'date',
        'order'    => 'DESC',
        'paged' => $paged
    ];

    $query = new WP_Query( $args );

    return $query;
}

/**
 * Get all custom post type tutoriel for the sitemap
 */
function getAllTutorielPosts() {
    $args = [
        'post_type'=> 'tutoriel',
        'post_per_page' => -1,
        'order_by' => 'date',
        'order'    => 'DESC',
    ];

    $query = new WP_Query( $args );

    return $query;
}