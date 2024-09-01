<?php
function create_product_post_type() {
  
    $labels = array(
        'name'                => _x( 'product', 'Post Type General Name', 'twentytwentyone' ),
        'singular_name'       => _x( 'product', 'Post Type Singular Name', 'twentytwentyone' ),
        'menu_name'           => __( 'product', 'twentytwentyone' ),
        'parent_item_colon'   => __( 'Parent product', 'twentytwentyone' ),
        'all_items'           => __( 'All product', 'twentytwentyone' ),
        'view_item'           => __( 'View product', 'twentytwentyone' ),
        'add_new_item'        => __( 'Add New product', 'twentytwentyone' ),
        'add_new'             => __( 'Add New', 'twentytwentyone' ),
        'edit_item'           => __( 'Edit product', 'twentytwentyone' ),
        'update_item'         => __( 'Update product', 'twentytwentyone' ),
        'search_items'        => __( 'Search product', 'twentytwentyone' ),
        'not_found'           => __( 'Not Found', 'twentytwentyone' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwentyone' ),
    );
  
    register_post_type( 'product',
        array(
            'labels' => $labels,
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'product'),
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail' ),
            'taxonomies' => array( 'category', 'post_tag' ),
            'show_in_rest' => true,
  
        )
    );
  
} 
add_action( 'init', 'create_product_post_type' );


?>