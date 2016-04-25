<?php
/*
Slider Custom Post
===================
*/
function create_slider_post_type() {
    $args = array(
        'description' => 'Slider Post Type',
        'show_ui' => true, // So it appears in the WordPress admin sidebar.
        'menu_position' => 20, 
        // This menu_position is just below 'Pages' in the WordPress Admin sidebar.
        // If you have multiple Custom Post Types, then position them how you like.
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-images-alt2',
        // Or choose another dashicon, http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'labels' => array(
            'name'=> 'Sliders',
            'singular_name' => 'Slider',
            'add_new' => 'Add New Slider',
            'add_new_item' => 'Add New Slider',
            'edit' => 'Edit Sliders',
            'edit_item' => 'Edit Slider',
            'new-item' => 'New Slider',
            'view' => 'View Sliders',
            'view_item' => 'View Slider',
            'search_items' => 'Search Sliders',
            'not_found' => 'No Sliders Found',
            'not_found_in_trash' => 'No Sliders Found in Trash',
            'parent' => 'Parent Slider'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
            )
        // Delete [, comments] above if not appropriate.
    );
    register_post_type( 'slider' , $args );
}
add_action( 'init', 'create_slider_post_type' );

/*
Service Port Type
================
*/

function create_service_post_type() {
    $args = array(
        'description' => 'Service Post Type',
        'show_ui' => true, // So it appears in the WordPress admin sidebar.
        'menu_position' => 20, 
        // This menu_position is just below 'Pages' in the WordPress Admin sidebar.
        // If you have multiple Custom Post Types, then position them how you like.
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-format-gallery',
        // Or choose another dashicon, http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'labels' => array(
            'name'=> 'Services',
            'singular_name' => 'Service',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit' => 'Edit Services',
            'edit_item' => 'Edit Service',
            'new-item' => 'New Service',
            'view' => 'View Services',
            'view_item' => 'View Service',
            'search_items' => 'Search Services',
            'not_found' => 'No Services Found',
            'not_found_in_trash' => 'No Services Found in Trash',
            'parent' => 'Parent Service'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',)
        // Delete [, comments] above if not appropriate.
    );
    register_post_type( 'service' , $args );
}
add_action( 'init', 'create_service_post_type' );

/*
Portfolio Post type
*/

function create_portfolio_post_type() {
    $args = array(
        'description' => 'Portfolios Post Type',
        'show_ui' => true, // So it appears in the WordPress admin sidebar.
        'menu_position' => 20, 
        // This menu_position is just below 'Pages' in the WordPress Admin sidebar.
        // If you have multiple Custom Post Types, then position them how you like.
        'exclude_from_search' => true,
        'menu_icon' => 'dashicons-book-alt',
        // Or choose another dashicon, http://www.kevinleary.net/wordpress-dashicons-list-custom-post-type-icons/
        'labels' => array(
            'name'=> 'Portfolios',
            'singular_name' => 'Portfolio',
            'add_new' => 'Add New Portfolio',
            'add_new_item' => 'Add New Portfolio',
            'edit' => 'Edit Portfolios',
            'edit_item' => 'Edit Portfolio',
            'new-item' => 'New Portfolio',
            'view' => 'View Portfolios',
            'view_item' => 'View Portfolio',
            'search_items' => 'Search Portfolios',
            'not_found' => 'No Portfolios Found',
            'not_found_in_trash' => 'No Portfolios Found in Trash',
            'parent' => 'Parent Portfolio'
        ),
        'public' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => true,
        'supports' => array(
            'title',
            'editor',
           
            'thumbnail',
           )
        // Delete [, comments] above if not appropriate.
    );
    register_post_type( 'portfolio' , $args );
}
add_action( 'init', 'create_portfolio_post_type' );
/*
NOTES on registering a custom post type
=======================================
You can now create these 'posts' in the normal way: Start a New Portfolio, e.g. compose a Portfolios 'post' and hit PUBLISH. Job done.
NOTE: WordPress throws a 404 error on NEW custom post types, because the CMS can't discover them for some reason. So you will need to go into PERMALINKS and change the settings to "Post name" /%postname%/ and hit SAVE. (Even if you have this setting already, please hit SAVE again.) This will flush the rewrite rules so WordPress rebuilds its permalinks (Just remember to do this every time you write code like this to register *another* Custom Post Type.)
*/
/*
Register the custom post taxonomy
=================================
E.g. Building upon the same example ('Portfolios') as above.
You need STEP TWO (the code below) so that you can have a hierarchy of sub-pages, e.g.
    • Portfolios
        - Free Portfolios
        - Cheap Portfolios
        – Expensive Portfolios
*/
function register_portfolio_taxonomy() {
    register_taxonomy('portfolio_category', 'portfolio', array (
        'labels' => array (
            'name' => 'Portfolio Categories',
            'singular_name' => 'Portfolio Category',
            'search_items' => 'Search Portfolio Categories',
            'popular_items' => 'Popular Portfolio Categories',
            'all_items' => 'All Portfolio Categories',
            'parent_item' => 'Parent Portfolio Category',
            'parent_item_colon' => 'Parent Portfolio Category:',
            'edit_item' => 'Edit Portfolio Category',
            'update_item' => 'Update Portfolio Category',
            'add_new_item' => 'Add New Portfolio Category',
            'new_item_name' => 'New Portfolio Category',
            ),
            'hierarchical' =>true,
            'show_ui' => true,
            'show_tagcloud' => true,
            'rewrite' => false,
            'public'=>true
        )
    );
}
add_action('init', 'register_portfolio_taxonomy');