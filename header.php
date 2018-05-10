<!DOCTYPE>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-
  width, initial-scale=1">
  <title></title>
  <?php wp_head(); ?>
</head>
<body>
  <?php
  $image_id = get_field ('logo_imagine' , 23);
  $image_url = wp_get_attachment_image_src( $image_id, 'logo_imagine' );
  ?>
  <header>
    <div class="container flex-container">
      <div class="logo-container">
        <img src= "<?= $image_url [0]?>;" alt="">
      </div>
      <nav>
        <ul class="navigation">
          <button class="burger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </button>
          <?php
          $menu = wp_nav_menu(array(
            'theme_location'          =>'top-menu',
            'menu_class'              =>'hide flex-container meniu',
            'echo'                    => false
          ) );
          echo strip_tags($menu, '<li><ul><a><nav>');
          ?>
          </ul>
          </nav>
          </div>
          </header>
