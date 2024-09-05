<?php get_header(); ?>

<sale-section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box">
                    <h1 style="text-align: end; font-size: 25px; color: white; font-weight: 500; padding-right: 25px;">30% <br> OFF</h1>
                    <h5 style="color: white; text-align: end; font-size: 14px; font-weight: 600; padding-right: 50px; letter-spacing: 2px;">BestSeller Store</h5>
                    <h2 style="color: white; font-weight: 700; letter-spacing: 2px; padding-right: 50px; text-align: end; font-size: 40px;">EveryThing</h2>
                    <h3 style="text-align: end; padding-right: 40px; font-size: 30px; font-weight: 400;">For Your</h3>
                    <h2 style="color: white; font-weight: 700; letter-spacing: 2px; padding-right: 50px; text-align: end; font-size: 40px;">Travelling</h2>
                    <h4 style="padding-right: 40px; text-align: end; font-size: 20px; font-weight: 400;">T-shirts Start At $24.00</h4>
                    <div class="btn-adjust-1">
                        <?php
                        $handBagsTemplate = homey_get_template_link_dash('template/template-category-shirt.php');
                        ?>
                        <a style="color: #FFFF00; font-size: 18px; padding: 10px 10px; background-color: black; border-radius: 25px; text-decoration: none;" href="<?php echo esc_url($handBagsTemplate);?>">Shop Now</a>
                    </div>
                    <div class="img-adjust">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/isolated-man-img.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="content-box-1">
                    <h5 style="color: white; padding-top: 40px; font-size: 14px; font-weight: 600; padding-left: 50px; letter-spacing: 2px;">Top New Arrivels</h5>
                    <h2 style="color: white; font-weight: 700; letter-spacing: 2px; padding-left: 50px; font-size: 40px;">Fashion <br> Collection</h2>
                    <h4 style="padding-left: 40px; padding-top: 30px; font-size: 18px; font-weight: 400;">Discover Top New Desgins</h4>
                    <div class="btn-adjust-2">
                    <?php
                        $handBagsTemplate = homey_get_template_link_dash('template/template-category-hand-bags.php');
                        ?>
                        <a style="color: #FFFF00; font-size: 18px; padding: 10px 10px; background-color: black; border-radius: 25px; text-decoration: none; " href="<?php echo esc_url($handBagsTemplate);?>">Shop Now</a>
                    </div>
                    <div class="img-adjust-1">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/images__1_-removebg-preview (1).png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="box-content-2">
                    <div class="back-img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/man-wearing-eyeglasses-and-brown-jacket.jpg" alt="">
                    </div>
                        <div class="img-data">
                            <h5 style="color: rgb(41, 28, 28); text-align: end; padding-top: 40px; font-size: 14px; font-weight: 600; padding-right: 50px; letter-spacing: 2px;">Top New Arrivels</h5>
                            <h2 style="color: white; font-weight: 700; letter-spacing: 2px; padding-right: 50px; text-align: end; font-size: 40px;">Sport</h2>
                            <h3 style="text-align: end; padding-right: 40px; font-size: 30px; font-weight: 400;">For Your</h3>
                            <div class="btn-adjust-3">
                            <?php
                                $handBagsTemplate = homey_get_template_link_dash('template/template-category-shirt.php');
                                ?>
                                <a style="color: #FFFF00; font-size: 18px; padding: 10px 10px; background-color: black; border-radius: 25px; text-decoration: none;" href="<?php echo esc_url($handBagsTemplate);?>">Shop Now</a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="box-content-3">
                    <div class="shoes-box">
                        <div class="shoes-img">
                            <img src="https://avatars.mds.yandex.net/i?id=6737a8f088be96ba3035b7c00cc2a4c48eefe12f-6985270-images-thumbs&n=13" alt="">
                            <div class="shoes-data">
                                <h2 style="color: white; font-weight: 700; letter-spacing: 2px; padding-right: 50px; text-align: end; font-size: 40px;">Shoe's</h2>
                                <h3 style="text-align: end; color: white; padding-right: 40px; font-size: 30px; font-weight: 400;">For Your</h3>
                                <div>
                                    <?php
                                    $handBagsTemplate = homey_get_template_link_dash('template/template-category-men-nikers.php');
                                    ?>
                                    <a style="color: #FFFF00; font-size: 18px; padding: 10px 10px; background-color: black; border-radius: 25px; text-decoration: none;" href="<?php echo esc_url($handBagsTemplate);?>">Shop Now</a>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="watch-box">
                        <div class="watch-img">
                            <img src="https://avatars.mds.yandex.net/i?id=fbca1fad6a90b553d620dd6c133058d8f416cdf5282d3885-12623687-images-thumbs&n=13" alt="">
                            <div class="watch-data">
                                <h2 style="color: white; font-weight: 700; letter-spacing: 2px; padding-right: 50px; text-align: end; font-size: 40px;">Watch</h2>
                                <h3 style="text-align: end; color: white; padding-right: 40px; font-size: 30px; font-weight: 400;">Collection</h3>
                                <div>
                                    <?php
                                    $handBagsTemplate = homey_get_template_link_dash('template/template-category-watches.php');
                                    ?>
                                    <a style="color: #FFFF00; font-size: 18px; padding: 10px 10px; background-color: black; border-radius: 25px; text-decoration: none;" href="<?php echo esc_url($handBagsTemplate);?>">Shop Now</a>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div> 
</sale-section>
<product-section>
    <div class="product">
        <div class="product-div">
            <div class="div"></div>
        </div>
        <div class="product-heading">Featured Product</div>
        <div class="product-cards">
                <?php
                $args = array(
                    'post_type'  => 'product',
                    'posts_per_page' => 5,
                    'tax_query' => array(
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
                                        <h5 class="card-title"><?php echo get_the_title(); ?></h5>
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
</product-section>
<category-section>
    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-8">
            <div class="glass-section">
                <h5 style="color: white; padding-top: 40px; font-size: 14px; text-align: end; font-weight: 600; padding-right: 50px; letter-spacing: 2px;">Top New Arrivels</h5>
                <h1 style="color: white; font-weight: 700; letter-spacing: 2px; padding-right: 50px; text-align: end; font-size: 40px;">Fashion</h1>
                <h3 style="color: white; font-weight: 500; letter-spacing: 2px; padding-right: 50px; text-align: end; font-size: 40px;">Sunglassess</h3>
                <div class="btn-adjust-4"> 
                    <?php
                    $handBagsTemplate = homey_get_template_link_dash('template/template-category-hand-bags.php');
                    ?>
                    <a style="color: #FFFF00; font-size: 18px; padding: 10px 10px; background-color: black; border-radius: 25px; text-decoration: none;" href="<?php echo esc_url($handBagsTemplate);?>">Shop Now</a>
                </div>
                <div class="glass-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>./assets/images/_dc3IE6SE3c-removebg-preview.png" alt="">
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="short-niker">
                <div class="niker-img">
                        <img src="https://avatars.mds.yandex.net/i?id=a4922e98c5ab3cdf4563ff087dabc1578ae97717-6946760-images-thumbs&n=13" alt="">
                    <div class="niker-data">
                        <h2 style="color: white; font-weight: 700; letter-spacing: 2px; padding-right: 50px; text-align: end; font-size: 40px;">Nikers</h2>
                        <h3 style="text-align: end; color: white; padding-right: 40px; font-size: 30px; font-weight: 400;">Collection</h3>
                        <div>
                            <?php
                            $handBagsTemplate = homey_get_template_link_dash('template/template-category-men-nikers.php');
                            ?>
                            <a style="color: #FFFF00; font-size: 18px; padding: 10px 10px; background-color: black; border-radius: 25px; text-decoration: none;" href="<?php echo esc_url($handBagsTemplate);?>">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</category-section>
<best-seller>
    <div class="product">
            <div class="product-div">
                <div class="div"></div>
            </div>
            <div class="product-heading">Best Seller</div>
            <div class="product-cards">
                <?php
                $args = array(
                    'post_type'  => 'product',
                    'posts_per_page' => 5,
                    'tax_query' => array(
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
                                        <h5 class="card-title"><?php echo get_the_title(); ?></h5>
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
</best-seller>
<link-advantage>
    <div class="advanatge-links">
        <div class="line"></div>
        <div style="margin-top: 50px; margin-bottom: 50px; margin-right: 100px; margin-left: 100px;" class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="links">
                    <i class="fa-solid fa-truck-fast"></i>
                    <div class="links-data">
                        <h1>Free Shipping</h1>
                        <p>Capped at 39$ per oder</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="links">
                    <i class="fa-brands fa-paypal"></i>
                    <div class="links-data">
                        <h1>Quick Payment</h1>
                        <p>100% secure Payment</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="links">
                    <i class="fa-solid fa-gift"></i>
                    <div class="links-data">
                        <h1>Gift Certificate</h1>
                        <p>Buy now 100$ to 1000$</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="links">
                    <i class="fa-regular fa-clock"></i>
                    <div class="links-data">
                        <h1>24/7 Support</h1>
                        <p>Ready your Oder</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</link-advantage>
<newsletter-section>
        <div class="letter">
                <h5 style="color: white; font-weight: 700; padding-top: 10px; letter-spacing: 2px; font-size: 20px;">Subcribe To Our</h5>
                <h1 style="color: white; font-weight: 900; padding-top: 10px; letter-spacing: 2px; font-size: 40px;">Newletter</h1>
                <p style="color: white; padding-top: 10px; font-size: 14px; font-weight: 600; letter-spacing: 2px;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <input type="email" placeholder="Enter Your Email">
                <button>Subcribe</button>
        </div>
</newsletter-section>

<?php get_footer(); ?>