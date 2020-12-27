<?php

/**
 * Load scripts
 */
function loadStyleAndScript() {
    // Load style
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/dist/main.css');

    // Load JS
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/dist/main.js');
};

add_action('wp_enqueue_scripts', 'loadStyleAndScript');
