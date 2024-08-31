<?php
    function includes_css_files() {
        wp_enqueue_style( 'slick-1', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], '21.2.7', 'all' );
        wp_enqueue_style( 'slick-2', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', [], '21.2.7', 'all' );
        wp_enqueue_style( 'slick-3', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', [], '21.2.7', 'all' );
        wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', [], '21.2.7', 'all' );
        wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', [], '21.2.7', 'all' );
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
    }

    add_action('wp_enqueue_scripts', 'includes_css_files');

    function includes_js_files() {
        wp_enqueue_script( 'slick-min', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array( 'jquery' ), '1.13.2', true );
        wp_enqueue_script( 'Jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', array( 'jquery' ), '1.13.2', true );
        wp_enqueue_script( 'bootstrap-min', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array( 'jquery' ), '1.13.2', true );
        wp_enqueue_script('script', get_template_directory_uri() . '/js/custom.js');
    }

    add_action('wp_enqueue_scripts', 'includes_js_files');

    // Menu function
    register_nav_menus( 
        array('primary-menu'=>'Top Menu')
    );

    // Images
    add_theme_support('post-thumbnails');

?>