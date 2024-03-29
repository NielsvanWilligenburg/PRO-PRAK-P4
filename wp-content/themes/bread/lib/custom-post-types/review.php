<?php

add_action('init', 'reviewPostType');

function reviewPostType()
{
    $args = [
        'labels' => [
            'name' => 'Reviews',         // veranderd de naam in het menu
            'singular_name' => 'Reviews',
            'all_items' => 'Reviews',           // alle reviews
            'edit_item' => 'review bewerken',   // review bewerken     
            'add_new' => 'Review aanmaken',     // Add button
            'add_new_item' => 'review toevoegen',    // review aanmaken
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'reviews',
        ],
    ];

    \register_post_type('reviews', $args);

}

