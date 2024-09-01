<?php get_header(); ?>
<?php
/*
 Template Name: Shop
*/
?>

<div class="container">
    <div class="card">
    <div class="card-body">
        <div class="product-grid">
        <div class ="product-filter">
            <select>
            <option value="">Filter by</option>
            <option value="price-asc">Price (Low to High)</option>
            <option value="price-desc">Price (High to Low)</option>
            <option value="alphabetical">Alphabetical</option>
            </select>
        </div>
        <div class="card">
        <div class="card-body">
            <div class="product-slider">
                <div class="slider-container">
                <div class="slide">
                    <img src="https://avatars.mds.yandex.net/i?id=b721e91ca7cc6831317a286f0317044a428d46b9-8312144-images-thumbs&n=13" alt="Product Image 1">
                </div>
                <div class="slide">
                    <img src="https://avatars.mds.yandex.net/i?id=6eb5c412ae076614a55574fc6e0690ccc686dc09-9865886-images-thumbs&n=13" alt="Product Image 2">
                </div>
                </div>
            </div>
        </div>
        </div> 
        <div class="product-list">
            <div class="product-item">
            <img src="https://avatars.mds.yandex.net/i?id=b721e91ca7cc6831317a286f0317044a428d46b9-8312144-images-thumbs&n=13" alt="Product Image 1">
            <h2>Product Name 1</h2>
            <p>Product Description 1</p>
            <p>Price: $19.99</p>
            <button sf-add-to-cart="1">Add to Cart</button>
            </div>
            <div class="product-item">
            <img src="https://avatars.mds.yandex.net/i?id=6eb5c412ae076614a55574fc6e0690ccc686dc09-9865886-images-thumbs&n=13" alt="Product Image 2">
            <h2>Product Name 2</h2>
            <p>Product Description 2</p>
            <p>Price: $29.99</p>
            <button sf-add-to-cart="1">Add to Cart</button>
            </div>
        </div>
        </div>
    </div>
    </div>    
</div>
<?php get_footer(); ?>



    
