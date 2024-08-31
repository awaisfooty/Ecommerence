<?php
function theme_add_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri('	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style-css', get_template_directory_uri('style.css') . '/style.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri('	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') . '/js/bootstrap.min.js', array(), '3.0.0', true );
    }
    
    add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

    // Menu function
    register_nav_menus( 
        array('primary-menu'=>'Top Menu')
    );
?>