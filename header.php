<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <?php wp_head();?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<banner-secton>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                  <a class="navbar-brand" href="http://localhost/store/"><img  src="https://sun6-22.userapi.com/s/v1/ig2/4ZxvZ2V93ayvtqAdGBled--OSBN1w4PVD8BRa2NQWaqxRlBAuNnIVblxwwZFFnhgc37ERfUX1fw6UfjKbOT8h_D0.jpg?size=50x50&quality=95&crop=224,0,1082,1082&ava=1" alt=""></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse menu-adjust ms-auto" id="navbarNavDropdown">
                      <?php wp_nav_menu(array('theme_location'=>'primary-menu','menu-class'=>'menu-adjust'));
                      
                      ?>
                      <div class="icons">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <i class="fa-regular fa-heart"></i>
                        <i class="fa-solid fa-user"></i>
                        <i class="fa-solid fa-cart-shopping"></i>
                      </div>
                  </div>
                </div>
              </nav>
        </div>
</banner-secton>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

