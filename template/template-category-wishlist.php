<?php get_header();?>
<?php
/*
 Template Name: Add To Wishlist
*/
?>
<div class="container">
    <div class="wishlist">
        <h1>My Wishlist</h1>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Product Name</th>
                    <th>Unit Price</th>
                    <th>Stock Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><i class="fas fa-times"></i></td>
                    <td>
                        <img src="https://avatars.mds.yandex.net/i?id=bb94b530c5f11c62b87cc5c0580d3de039f6778a-7545493-images-thumbs&n=13" alt="Product Split Image">
                        Product Split
                    </td>
                    <td>
                        <span class="line-through">€100.00</span>
                        <span class="text-red">€70.00</span>
                    </td>
                    <td>In Stock</td>
                    <td><a href="#" class="btn">ADD TO CART</a></td>
                </tr>
                <tr>
                    <td><i class="fas fa-times"></i></td>
                    <td>
                        <img src="https://avatars.mds.yandex.net/i?id=89dd2b0e6bf4ee709abb7f5e1d22ce311a459e01-7465150-images-thumbs&n=13" alt="Product Grid Image">
                        Product Grid
                    </td>
                    <td>€250.00</td>
                    <td>In Stock</td>
                    <td><a href="#" class="btn">ADD TO CART</a></td>
                </tr>
                <tr>
                    <td><i class="fas fa-times"></i></td>
                    <td>
                        <img src="https://avatars.mds.yandex.net/i?id=01d7748165ddc5eae5bd489021e4c42821271dc0-5008643-images-thumbs&n=13" alt="Product Stacked Image">
                        Product Stacked
                    </td>
                    <td>€135.00</td>
                    <td>In Stock</td>
                    <td><a href="#" class="btn">ADD TO CART</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php get_footer();?>