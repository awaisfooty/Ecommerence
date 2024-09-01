<?php get_header(); ?>
<?php
/*
 Template Name: Shop
*/
?>

<h1 style="text-align: center; font-size: 30px; font-weight:800; margin-top: 30px;">Shop Now</h1>
    <p style="font-size: 14px; font-weight:600; text-align: center; margin-top: 30px;">Thanks For Vistiing Us All Products Are Here</p>

    <div class="all-products">
    <div class="product-cards">
        <?php
                    $args = array(
                        'post_type'  => 'product',
                         'posts_per_page' => 9,
                    );
                    $loop = new WP_Query($args);
                    while ( $loop->have_posts() ) {
                        $loop->the_post();
                        $id = get_the_ID();
                        
                        ?>
                        <div class="card-1">
                            <div class="card" style="width: 18rem;">
                                <img src="https://avatars.mds.yandex.net/i?id=d0ba8c62bb0c956054484f0197d588ad815b6ffd-12208630-images-thumbs&n=13" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="<?php echo get_the_permalink($id); ?>"><h5 class="card-title">Long-Sleeve Shirt male Slim Fashion stand</h5></a>
                                    <p style="text-align: center;" class="card-text">$2500.00</p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                ?>
                <div class="card-1">
                    <div class="card" style="width: 18rem;">
                        <img src="https://avatars.mds.yandex.net/i?id=f282d19afce3a8987096e1063a01b75b614fae7f-4340110-images-thumbs&n=13" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">140+ Sublimation TShirt Template Psd Free </h5>
                            <p style="text-align: center;" class="card-text">$2399.00</p>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="card" style="width: 18rem;">
                        <img src="https://avatars.mds.yandex.net/i?id=15784299e4039d132f44fe3c5f714c590393b99e8a0bad6b-10231289-images-thumbs&n=13" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Breitling for bentley mulliner tourbillon Breitling</h5>
                            <p style="text-align: center;" class="card-text">$2199.00</p>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="card" style="width: 18rem;">
                        <img src="https://avatars.mds.yandex.net/i?id=f0c5ed5fd39725f2b5c3235ada227e06308ffd39-12421984-images-thumbs&n=13" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sacai x Nike VaporWaffle Black Gum DD1875</h5>
                            <p style="text-align: center;" class="card-text">$2399.00</p>
                        </div>
                    </div>
                </div>
                <div class="card-1">
                    <div class="card" style="width: 18rem;">
                        <img src="https://avatars.mds.yandex.net/i?id=ceb339d33f9b6cb0eb38caccbc4d591651001a8c-8178604-images-thumbs&n=13" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Shoulder Bag Bolsas Femininas Sac Fashion </h5>
                            <p style="text-align: center;" class="card-text">$2799.00</p>
                        </div>
                    </div>
                </div>
            </div> 
    </div>
    <div class="product-cards">
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=97e58ab747f74b9e245ff7707de360ac95e0ee36-4375862-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Long-Sleeve Shirt male Slim Fashion stand</h5>
                                <p style="text-align: center;" class="card-text">$2500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=cbe685ca46168ce34efa19ff2915f00cf3045790-9149651-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">140+ Sublimation TShirt Template Psd Free </h5>
                                <p style="text-align: center;" class="card-text">$2399.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=f5a88ac89320fca0cf671d658aa5dd4e7d212335-12365999-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Breitling for bentley mulliner tourbillon Breitling</h5>
                                <p style="text-align: center;" class="card-text">$2199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=a459530dcf2b50cffe2847d41abac0529ea0926f-5221624-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sacai x Nike VaporWaffle Black Gum DD1875</h5>
                                <p style="text-align: center;" class="card-text">$2399.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=f58c0b5b4a2d4d5902b32fa8aa11efa55a62660a-4824764-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Shoulder Bag Bolsas Femininas Sac Fashion </h5>
                                <p style="text-align: center;" class="card-text">$2799.00</p>
                            </div>
                        </div>
                    </div>
    </div> 
    <div class="product-cards">
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=342f78261e69a57fab5b4623e5c1b1c139f2fb20-5088393-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Long-Sleeve Shirt male Slim Fashion stand</h5>
                                <p style="text-align: center;" class="card-text">$2500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=6166e379654b8cfef7fb15917239117039131040-7051656-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">140+ Sublimation TShirt Template Psd Free </h5>
                                <p style="text-align: center;" class="card-text">$2399.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=069c4414fe44510afbf722aa991af3b2d167d3ce-12439486-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Breitling for bentley mulliner tourbillon Breitling</h5>
                                <p style="text-align: center;" class="card-text">$2199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=28871b1c1bf409d2e528ec7268b0f21fa86876fb-9198383-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sacai x Nike VaporWaffle Black Gum DD1875</h5>
                                <p style="text-align: center;" class="card-text">$2399.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=22125ebe0e49684fc3d6acb78f4ef8b2192963be-9180844-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Shoulder Bag Bolsas Femininas Sac Fashion </h5>
                                <p style="text-align: center;" class="card-text">$2799.00</p>
                            </div>
                        </div>
                    </div>
    </div> 
    <div class="product-cards">
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=a2624dc0951d1cfdb333ca6f40934a6035dc0239f6481e42-10244453-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Long-Sleeve Shirt male Slim Fashion stand</h5>
                                <p style="text-align: center;" class="card-text">$2500.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=4b58b23c6e19c74c45f19150dd488cedb105f5d8-12208630-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">140+ Sublimation TShirt Template Psd Free </h5>
                                <p style="text-align: center;" class="card-text">$2399.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=e95190d4ddad0c0449ce4b7b450b8d23253d9cbb-12724437-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Breitling for bentley mulliner tourbillon Breitling</h5>
                                <p style="text-align: center;" class="card-text">$2199.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=b47feab21bdd702c2cb3e6611a44e27f99842255-10122395-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Sacai x Nike VaporWaffle Black Gum DD1875</h5>
                                <p style="text-align: center;" class="card-text">$2399.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-1">
                        <div class="card" style="width: 18rem;">
                            <img src="https://avatars.mds.yandex.net/i?id=5726e9a14519d4702300e2590c91457a0ca207c0-10837594-images-thumbs&n=13" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Shoulder Bag Bolsas Femininas Sac Fashion </h5>
                                <p style="text-align: center;" class="card-text">$2799.00</p>
                            </div>
                        </div>
                    </div>
    </div> 
<?php get_footer(); ?>



    
