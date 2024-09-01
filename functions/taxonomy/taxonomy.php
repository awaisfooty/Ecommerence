<?php

function add_custom_colors_taxonomies() {
    // Add new "Locations" taxonomy to Posts
    register_taxonomy('colors', 'product', array(
      // Hierarchical taxonomy (like categories)
      'hierarchical' => true,
      // This array of options controls the labels displayed in the WordPress Admin UI
      'labels' => array(
        'name' => _x( 'Colors', 'taxonomy general name' ),
        'singular_name' => _x( 'colors', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Colors' ),
        'all_items' => __( 'All Colors' ),
        'parent_item' => __( 'Parent colors' ),
        'parent_item_colon' => __( 'Parent colors:' ),
        'edit_item' => __( 'Edit colors' ),
        'update_item' => __( 'Update colors' ),
        'add_new_item' => __( 'Add New colors' ),
        'new_item_name' => __( 'New colors Name' ),
        'menu_name' => __( 'Colors' ),
      ),
      // Control the slugs used for this taxonomy
      'rewrite' => array(
        'slug' => 'colors', // This controls the base slug that will display before each term
        'with_front' => false, // Don't display the category base before "/locations/"
        'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
      ),
    ));
  }
  add_action( 'init', 'add_custom_colors_taxonomies', 0 );

?>