<?php

/**
 * Create menus locations
 */
function registerMenus() {
    register_nav_menus ([
        'footer-info' => ('footer-info'),
        'footer-legal' => ('footer-legal'),
        'blog-menu' => ('blog-menu')
    ]);
};

add_action( 'init', 'registerMenus' );

/**
 * Get the id location for footer menu info
 */
function getFooterInfoItems() {
    $menuLocations = get_nav_menu_locations();
    $footerMenuInfoId = $menuLocations['footer-info'];

    return wp_get_nav_menu_items($footerMenuInfoId);
}

/**
 * Get the id location for footer menu legal
 */
function getFooterLegalItems() {
    $menuLocations = get_nav_menu_locations();
    $footerMenuLegalId = $menuLocations['footer-legal'];

    return wp_get_nav_menu_items($footerMenuLegalId);
}

/**
 * Get the id location for blog menu
 */
function getBlogItems() {
    $menuLocations = get_nav_menu_locations();
    $blogMenuId = $menuLocations['blog-menu'];

    return wp_get_nav_menu_items($blogMenuId);
}