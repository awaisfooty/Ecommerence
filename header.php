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
                            <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
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
                            $handBagsTemplate = homey_get_template_link_dash('template/template-category-add-to-cart.php');
                          ?>
                          <a href="<?php echo esc_url($handBagsTemplate);?>"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                      </div>
                      </div>
                  </div>
                </div>
              </nav>
        </div>
</banner-secton>


