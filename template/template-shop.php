<?php get_header(); ?>
<?php
/*
 Template Name: Shop
*/
?>

<div>
    <h1 style="text-align: center; font-size: 30px; font-weight:800; margin-top: 30px;">Shop Now</h1>
    <p style="font-size: 14px; font-weight:600; text-align: center; margin-top: 30px;">Thanks For Vistiing Us All Products Are Here</p>
</div>
<div class="all-products">
    <div class="product-cards">
    <?php
    $args = array(
        'post_type'  => 'product',
        'posts_per_page' => 5,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => 'hand-bags', // yehan aapki category ka slug daalein
            ),
        ),
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            $id = get_the_ID();

            // Get product metadata
            $product_price = get_post_meta($id, 'product_price', true);
            $product_currency = get_post_meta($id, 'product_currency', true);
            $product_quantity = get_post_meta($id, 'product_quantity', true);
            $featured_image_url = get_the_post_thumbnail_url($id, 'medium');

            // Display product card
            ?>
            <div class="card-1">
                <div class="card" style="width: 18rem;">
                    <div class="image-container">
                        <img src="<?php echo $featured_image_url; ?>" class="card-img-top" alt="...">
                        <div class="overlay">
                            <div class="featured-box">
                                <p>Featured</p>
                            </div>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="add-cart">
                            <?php
                                $handBagsTemplate = homey_get_template_link_dash('template/template-category-add-to-cart.php');
                            ?>
                            <a class="add-to-cart-btn" href="<?php echo esc_url($handBagsTemplate);?>">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo get_the_permalink($id); ?>">
                            <h5 style="align-items: center; color: black;" class="card-title"><?php echo get_the_title(); ?></h5>
                        </a>
                        <p style="text-align: center;" class="card-text">
                            <?php echo $product_quantity; ?> <br>
                            <?php echo $product_currency; ?> <?php echo $product_price; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // Display a message if no products are found
        echo '<p>No products found.</p>';
    }

    // Reset the post data
    wp_reset_postdata();
    ?>
    </div>  
</div>
<div class="product-cards">
    <?php
    $args = array(
        'post_type'  => 'product',
        'posts_per_page' => 5,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => 'shirt', // yehan aapki category ka slug daalein
            ),
        ),
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            $id = get_the_ID();

            // Get product metadata
            $product_price = get_post_meta($id, 'product_price', true);
            $product_currency = get_post_meta($id, 'product_currency', true);
            $product_quantity = get_post_meta($id, 'product_quantity', true);
            $featured_image_url = get_the_post_thumbnail_url($id, 'medium');

            // Display product card
            ?>
            <div class="card-1">
                <div class="card" style="width: 18rem;">
                    <div class="image-container">
                        <img src="<?php echo $featured_image_url; ?>" class="card-img-top" alt="...">
                        <div class="overlay">
                            <div class="featured-box">
                                <p>Featured</p>
                            </div>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="add-cart">
                            <?php
                                $handBagsTemplate = homey_get_template_link_dash('template/template-category-add-to-cart.php');
                            ?>
                            <a class="add-to-cart-btn" href="<?php echo esc_url($handBagsTemplate);?>">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo get_the_permalink($id); ?>">
                            <h5 style="align-items: center; color: black;" class="card-title"><?php echo get_the_title(); ?></h5>
                        </a>
                        <p style="text-align: center;" class="card-text">
                            <?php echo $product_quantity; ?> <br>
                            <?php echo $product_currency; ?> <?php echo $product_price; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // Display a message if no products are found
        echo '<p>No products found.</p>';
    }

    // Reset the post data
    wp_reset_postdata();
    ?>
</div> 
<div class="product-cards">
    <?php
    $args = array(
        'post_type'  => 'product',
        'posts_per_page' => 5,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => 'watches', // yehan aapki category ka slug daalein
            ),
        ),
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            $id = get_the_ID();

            // Get product metadata
            $product_price = get_post_meta($id, 'product_price', true);
            $product_currency = get_post_meta($id, 'product_currency', true);
            $product_quantity = get_post_meta($id, 'product_quantity', true);
            $featured_image_url = get_the_post_thumbnail_url($id, 'medium');

            // Display product card
            ?>
            <div class="card-1">
                <div class="card" style="width: 18rem;">
                    <div class="image-container">
                            <img src="<?php echo $featured_image_url; ?>" class="card-img-top" alt="...">
                        <div class="overlay">
                            <div class="featured-box">
                                <p>Featured</p>
                            </div>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="add-cart">
                            <?php
                                $handBagsTemplate = homey_get_template_link_dash('template/template-category-add-to-cart.php');
                            ?>
                            <a class="add-to-cart-btn" href="<?php echo esc_url($handBagsTemplate);?>">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo get_the_permalink($id); ?>">
                            <h5 style="align-items: center; color: black;" class="card-title"><?php echo get_the_title(); ?></h5>
                        </a>
                        <p style="text-align: center;" class="card-text">
                            <?php echo $product_quantity; ?> <br>
                            <?php echo $product_currency; ?> <?php echo $product_price; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // Display a message if no products are found
        echo '<p>No products found.</p>';
    }

    // Reset the post data
    wp_reset_postdata();
    ?>
</div> 
<div class="product-cards">
    <?php
    $args = array(
        'post_type'  => 'product',
        'posts_per_page' => 5,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => 'men-nikers', // yehan aapki category ka slug daalein
            ),
        ),
    );

    $loop = new WP_Query($args);

    if ($loop->have_posts()) {
        while ($loop->have_posts()) {
            $loop->the_post();
            $id = get_the_ID();

            // Get product metadata
            $product_price = get_post_meta($id, 'product_price', true);
            $product_currency = get_post_meta($id, 'product_currency', true);
            $product_quantity = get_post_meta($id, 'product_quantity', true);
            $featured_image_url = get_the_post_thumbnail_url($id, 'medium');

            // Display product card
            ?>
            <div class="card-1">
                <div class="card" style="width: 18rem;">
                    <div class="image-container">
                        <img src="<?php echo $featured_image_url; ?>" class="card-img-top" alt="...">
                        <div class="overlay">
                            <div class="featured-box">
                                <p>Featured</p>
                            </div>
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <div class="add-cart">
                            <?php
                                $handBagsTemplate = homey_get_template_link_dash('template/template-category-add-to-cart.php');
                            ?>
                            <a class="add-to-cart-btn" href="<?php echo esc_url($handBagsTemplate);?>">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo get_the_permalink($id); ?>">
                            <h5 style="align-items: center; color: black;" class="card-title"><?php echo get_the_title(); ?></h5>
                        </a>
                        <p style="text-align: center;" class="card-text">
                            <?php echo $product_quantity; ?> <br>
                            <?php echo $product_currency; ?> <?php echo $product_price; ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
        }
    } else {
        // Display a message if no products are found
        echo '<p>No products found.</p>';
    }

    // Reset the post data
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>
