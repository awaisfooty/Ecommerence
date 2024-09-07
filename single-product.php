<?php get_header(); ?>

    <div class="container">
        <div class="product-container">
            <div class="row">
                <div class="col-sm-12 col-md-1 col-lg-1">
                    <?php
                        $id = get_the_ID();
                        $image_size = 'medium';
                        $product_images = get_post_meta($id, 'product_images', true);
                        if (!empty($product_images)){
                            foreach ($product_images[0] as $image_id) {
                                $image_url = wp_get_attachment_image_url($image_id, $image_size);
                                ?>
                                    <img style="height: 60px; border-radius:10px; width: 100%; margin-bottom: 10px;" src="<?php echo $image_url; ?>" alt="">
                                <?php
                            }
                        }   
                    ?>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5">
                    <?php 
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'small');
                        if ($img == ''){
                        ?>
                        <?php
                        }else {
                            ?>
                                <img class="new-post" src="<?php echo $img[0]; ?>" alt="">
                            <?php
                        }
                    ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="product-details">
                    <h2><?php echo get_the_title();?></h2>
                    <p class="price">$25.99</p>
                    <div class="colors">
                        <p>Colors</p>
                    <span class="color" style="background-color: #ffffff;"></span>
                    <span class="color" style="background-color: #000000;"></span>
                    <span class="color" style="background-color: #808080;"></span>
                    <span class="color" style="background-color: #0000FF"></span>
                    <span class="color" style="background-color: #AA0000"></span>
                    <span class="color" style="background-color: #FFFF00"></span>
                    </div>
                    
                    <p class="description">A casual equiement, perfect for everyday wear.</p>
                    <a class="add-to-cart-btn" href="http://localhost/ecommerence/add-to-cart/">Add To Cart</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div style="padding-bottom: 45px;" class="card-body">
            <div class="container">
                <div class="product-grid">
                    <div class="product-item">
                        <img src="https://avatars.mds.yandex.net/i?id=1acbf523f3ebc29618da7f0055c1241b76e72460-9269645-images-thumbs&n=13" alt="Product Image 1">
                        <h3>Product 1</h3>
                        <p>Price: $29.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                    <div class="product-item">
                        <img src="https://avatars.mds.yandex.net/i?id=571757962023cdb7ec0726701d7be3e8882cc496-6474952-images-thumbs&n=13   " alt="Product Image 2">
                        <h3>Product 2</h3>
                        <p>Price: $39.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                    <div class="product-item">
                        <img src="https://avatars.mds.yandex.net/i?id=55e3fdf815bbc4647d15a421fe20a46e8f5e170f-5899861-images-thumbs&n=13" alt="Product Image 3">
                        <h3>Product 3</h3>
                        <p>Price: $49.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                    <div class="product-item">
                        <img src="https://avatars.mds.yandex.net/i?id=28e80e36e2e8a3954b7415925e8084d1653fa704-8209878-images-thumbs&n=13" alt="Product Image 3">
                        <h3>Product 3</h3>
                        <p>Price: $49.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                    <div class="product-item">
                        <img src="https://avatars.mds.yandex.net/i?id=6f266a13ed9485706f089851f61aa56e78888a36-7753642-images-thumbs&n=13" alt="Product Image 3">
                        <h3>Product 3</h3>
                        <p>Price: $49.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                    <div class="product-item">
                        <img src="https://avatars.mds.yandex.net/i?id=a5c48994abbd62dab8a04b2e8685c6633f535b1c-8498339-images-thumbs&n=13" alt="Product Image 3">
                        <h3>Product 3</h3>
                        <p>Price: $49.99</p>
                        <button class="add-to-cart">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php get_footer(); ?>