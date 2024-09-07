<?php

    include_once(get_stylesheet_directory() . '/functions/posts/product.php');
    include_once(get_stylesheet_directory() . '/functions/metaboxes/mateboxes.php');
    include_once(get_stylesheet_directory() . '/functions/taxonomy/taxonomy.php');

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

    // TO ADD FEATURED Images
    add_theme_support('post-thumbnails');

    // Template Links
    if( !function_exists('homey_get_template_link_dash') ) {
        function homey_get_template_link_dash($template) {
            $args = array(
                'meta_key' => '_wp_page_template',
                'meta_value' => $template
            );
            $pages = get_pages($args);
            if( $pages ) {
                $add_link = get_permalink( $pages[0]->ID );
            } else {
                $add_link = '';
            }
            return $add_link;
        }
    }


    // VARIABLES
    // $test = 4 + 5;
    // $price = 105 - 10;
    // $price = 10 * 10;
    // $price = 15 / 5;

    // $actual_price = 100;
    // $discount_price = 10;

    // $newPrice = 100 - 90;

    // $title = get_the_title($post_id);

    // $description = get_the_content($post_id);
    
    // $post_id = 165;
    // $product_price = get_post_meta($post_id, 'product_price', true);
    // $product_price = '';
    
    // if (empty($product_price)){
    //     echo 'value not found';
    // }else{
    //     echo $product_price;
    // }

    // $one = "what is the name";
    // $two = "umiar";

    // echo $one . " " . $two;

    // $title = get_the_title($post_id);

    // echo $title;

    // echo $result;

    // Condition

    // $a = 10;
    // $b = 15;
    // $c = 20;

    // if ($a < 5){
    //     echo "A is smaller then 5";
    // }elseif($a < 11){
    //     echo "A is smaller then 11";
    // }else {
    //     echo "A is not in the conditions";
    // }

    // $values = array('one', 'two', 'three', 'four', 'five');

    // foreach($values as $value){
    //     echo $value;
    //     echo "<br>";
    // }
   
    // $fname = "Jenifer"
    //    echo "Hello $fname";

    //$fname = "Jenifer"
    ///echo "Hello $fname";













    

    

?>