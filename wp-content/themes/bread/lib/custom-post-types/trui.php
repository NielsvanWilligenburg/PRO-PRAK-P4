<?php

add_action('init', 'truiPostType');

function truiPostType()
{
    $args = [
        'labels' => [
            'name' => 'Trui',
            'singular_name' => 'Truien',
            'all_items' => 'Truien',
            'edit_item' => 'Truien bewerken',
            'add_new' => 'Truien aanmaken',
            'add_new_item' => 'Truien toevoegen',
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
            'slug' => 'truien',
        ],
    ];

    \register_post_type('trui', $args);

}

