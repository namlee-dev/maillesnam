<?php

function maillesnamThemeSupports() {
    add_theme_support('post-thumbnails');
    add_theme_support ('title-tag');
    add_image_size( 'front-page-thumb', 400, 400 );
}

add_action('init', 'maillesnamThemeSupports');
