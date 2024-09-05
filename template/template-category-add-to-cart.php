<?php get_header();?>
<?php
/*
 Template Name: Add To Cart
*/
?>
<body>
  <div class="container">
    <div class="product-info">
      <h2>Product Name</h2>
      <img src="product-image.jpg" alt="Product Image">
      <p>Product Description</p>
      <p>Price: $X.XX</p>
    </div>
    <div class="sidebar">
      <h2>Add to Cart</h2>
      <form id="add-to-cart-form" method="post" action="your-server-side-script.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city" required><br><br>
        <label for="postal-code">Postal Code:</label>
        <input type="text" id="postal-code" name="postal-code" required><br><br>
        <label for="discount-coupon">Discount Coupon:</label>
        <input type="text" id="discount-coupon" name="discount-coupon"><br><br>
        <input type="submit" value="Add to Cart">
      </form>
    </div>
  </div>
</body>

<?php get_footer();?>