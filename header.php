<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php wp_head();?>
</head>
<body>
<banner-secton>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="http://localhost/ecommerence/"><img  src="https://sun6-22.userapi.com/s/v1/ig2/4ZxvZ2V93ayvtqAdGBled--OSBN1w4PVD8BRa2NQWaqxRlBAuNnIVblxwwZFFnhgc37ERfUX1fw6UfjKbOT8h_D0.jpg?size=50x50&quality=95&crop=224,0,1082,1082&ava=1" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse menu-adjust ms-auto" id="navbarNavDropdown">
                    <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu-class'=>'menu-adjust'));
                      
                    ?>
                    <div class="icons">
                      <div>
                        <button style="border: none; background:none;">
                          <i class="fa-solid fa-magnifying-glass" data-bs-toggle="modal" data-bs-target="#staticBackdrop"></i>
                        </button>
                      <!-- Modal -->
                      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Search</h1>
                              <button type="button" class="btn-close" style="color: black;" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <input style="font-size: 24px; font-weight: 300;" type="text" placeholder="search" name="" id="">
                              <div class="search-icon-adjust">
                                <i class="fa-solid fa-magnifying-glass"></i>
                              </div>
                            </div>
                            <div class="modal-footer">
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      <div>
                          <?php
                            $handBagsTemplate = homey_get_template_link_dash('template/template-category-wishlist.php');
                          ?>
                              <a href="<?php echo esc_url($handBagsTemplate);?>"><i class="fa-regular fa-heart"></i></a>
                      </div>
                      <div>
                          <?php
                            $handBagsTemplate = homey_get_template_link_dash('template/template-category-my-account.php');
                          ?>
                          <a href="<?php echo esc_url($handBagsTemplate);?>"><i class="fa-solid fa-user"></i></a>
                      </div>
                      <div>
                          <?php
                            $handBagsTemplate = homey_get_template_link_dash('template/template-add-to-cart.php');
                          ?>
                          <a href="<?php echo esc_url($handBagsTemplate);?>"><i class="fa-solid fa-cart-shopping"></i></a>
                      </div>

                    </div>
                  </div>
                  </div>
            </nav>
        </div>  
</banner-secton>


