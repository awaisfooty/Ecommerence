<?php
/*
 Template Name: Add To Cart
*/
$id = $_GET['id'];
$product_price = get_post_meta($id, 'product_price', true);
$product_currency = get_post_meta($id, 'product_currency', true);
$product_quantity = get_post_meta($id, 'product_quantity', true);
get_header();
?>

<?php
  if(empty($id)){
    echo "<h2>Error 404</h2>";
  }elseif($id){
    ?>
       <div class="container">
        <div class="row">
          <div class="col-sm-12 col-lg-8 col-md-8">
              <div class="cart">
                <h1>
                  Shopping Cart
                </h1>
                <table>
                  <div>
                    <tr>
                      <th>
                        Product
                      </th>
                      <th>
                        Quantity
                      </th>
                      <th>
                        Subtotal
                      </th>
                    </tr>
                  </div>
                <tbody>
                  <tr>
                    <td>
                    <?php 
                        $img = wp_get_attachment_image_src(get_post_thumbnail_id($id),'small');
                        if ($img == ''){
                        ?>
                        <?php
                        }else {
                            ?>
                                <img class="cart-img" src="<?php echo $img[0]; ?>" alt="">
                            <?php
                        }
                    ?>
                      <span><?php echo get_the_title($id);?></span>
                    </td>
                    <td>
                      <div class="quantity">
                      <button>
                        -
                      </button>
                      <input type="text" placeholder="1">
                      <button>
                        +
                      </button>
                      </div>
                    </td>
                    <td>
                      <?php echo $product_price; ?>
                      <span class="remove">
                      ×
                      </span>
                    </td>
                  </tr>
                </tbody>
                </table>
                <div class="coupon">
                  <input placeholder="Coupon code" type="text"/>
                <button>
                  APPLY COUPON
                </button>
                </div>
              </div>
          </div>
          <div class="col-sm-12 col-lg-4 col-md-4">
            <div class="cart-totals">
                <h2>
                  Cart totals
                </h2>
                <table>
                <tr>
                  <th>
                  Subtotal
                  </th>
                  <td>
                  Rs 500,500
                  </td>
                </tr>
                <tr>
                  <th>
                  Shipping
                  </th>
                  <td>
                  Free Shipping
                  <br/>
                  Shipping to Sindh.
                  </td>
                </tr>
                <tr>
                  <th>
                  Total
                  </th>
                  <td class="total">
                  Rs 500,500
                  <span>
                    (includes Rs 100,100 Tax)
                  </span>
                  </td>
                </tr>
                </table>
                <button>
                PROCEED TO CHECKOUT
                </button>
            </div> 
          </div>  
        </div>
      </div> 
    <?php

  }
?>

<?php get_footer();?>

