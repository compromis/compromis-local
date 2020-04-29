<?php

add_action( 'init', function () {

    /**
    * Register Legislatura Post Type
    */

    $labels = [
        'name' => 'Legislatura',
        'singular_name' => 'Document',
        'add_new' => 'Nou document',
        'add_new_item' => 'Nou document',
        'edit_item' => 'Edita document',
        'new_item' => 'Nou document',
        'all_items' => 'Tots els documents',
        'view_item' => 'Veure el document',
        'search_items' => 'Cerca els documents',
        'not_found' =>  'No s\'han trobat documents',
        'not_found_in_trash' => 'No hi ha documents a la paperera', 
        'parent_item_colon' => '',
        'menu_name' => 'Legislatura'
    ];

    $args = [
        'label' => 'Documents',
        'labels' => $labels,
        'description' => '',
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'rest_base' => '',
		'rest_controller_class' => 'WP_REST_Posts_Controller',
        'has_archive' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'delete_with_user' => false,
        'exclude_from_search' => false,
        'capability_type' => 'post',
        'map_meta_cap' => true,
        'hierarchical' => false,
        'rewrite' => ['slug' => 'legislatura', 'with_front' => true],
        'query_var' => true,
        'supports' => ['title', 'editor'],
    ];

    register_post_type('legislatura', $args);

    /**
     * Taxonomy: Categories.
     */

    $labels = [
        'name' => __('Categories', 'sage'),
        'singular_name' => __('Categoria', 'sage'),
    ];

    $args = [
        'label' => __('Categories', 'sage'),
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'legislatura_arxiu', 'with_front' => true],
        'show_admin_column' => false,
        'show_in_rest' => true,
        'rest_base' => 'legislatura_arxiu',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'show_in_quick_edit' => false,
    ];

    register_taxonomy('legislatura_arxiu', ['legislatura'], $args);

    /**
     * Taxonomy: Etiquetes.
     */

    $labels = [
        'name' => __('Etiquetes', 'sage'),
        'singular_name' => __('Etiqueta', 'sage'),
    ];

    $args = [
        'label' => __('Etiquetes', 'sage'),
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'query_var' => true,
        'rewrite' => ['slug' => 'legislatura_etiquetes', 'with_front' => true],
        'show_admin_column' => false,
        'show_in_rest' => true,
        'rest_base' => 'legislatura_etiquetes',
        'rest_controller_class' => 'WP_REST_Terms_Controller',
        'show_in_quick_edit' => false,
    ];

    register_taxonomy('legislatura_etiquetes', ['legislatura'], $args);
});
