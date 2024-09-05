<?php get_header(); ?>
<?php
/*
 Template Name: Men-nikers
*/
?>
<div>
    <h1 style="font-weight: 700; letter-spacing: 2px; text-align: center; font-size: 30px; margin-top: 20px;">All Your Favorite items are here.</h1>
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
                            <button class="add-to-cart-btn">Add to Cart</button>
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

<?php get_footer();?>