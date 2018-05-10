

<?php get_header (); ?>
<style>
h3 {
  margin-top: 100px;
}
.paragrah-container {
  width: 80%
}

</style>
<?php
  $image_id = get_field ('about_me_image' , 159);
  $image_url = wp_get_attachment_image_src( $image_id, 'about_me_image' );
?>

<section class="just-default-section" id="features">
  <div class="h4-container">
    <h3> ABOUT ME </h3>
  </div>
  <div class="span-container1">
    <span class ="bottom_line"></span>
  </div>
  <div class="flex-container2">
    <div class="paragrah-container">
      <p><?php the_field('about_me_paragraph', 159) ?>

    </div>
    <div class="picture1-container">
      <ul>
        <li>
          <img src= "<?= $image_url [0]?>;" alt="">

    </li>
    <ul>
    </div>
    </div>

    <?php
      $image_id = get_field ('about_me_image2' , 159);
      $image_url = wp_get_attachment_image_src( $image_id, 'about_me_image' );
    ?>

    <div class="flex-container2">

      <div class="picture1-container">
        <ul>
          <li>
            <img src= "<?= $image_url [0]?>;" alt="">

      </li>
      <ul>
      </div>
      <div class="paragrah-container">
        <p><?php the_field('about_me_paragraph2', 159) ?>

      </div>
      </div>
      <?php
        $image_id = get_field ('about_me_image3' , 159);
        $image_url = wp_get_attachment_image_src( $image_id, 'about_me_image' );
      ?>

        <div class="flex-container2">
          <div class="paragrah-container">
            <p><?php the_field('about_me_paragraph3', 159) ?>

          </div>
          <div class="picture1-container">
            <ul>
              <li>
                <img src= "<?= $image_url [0]?>;" alt="">

          </li>
          <ul>
          </div>
          </div>
          <?php
            $image_id = get_field ('about_me_image4' , 159);
            $image_url = wp_get_attachment_image_src( $image_id, 'about_me_image' );
          ?>

          <div class="flex-container2">

            <div class="picture1-container">
              <ul>
                <li>
                  <img src= "<?= $image_url [0]?>;" alt="">

            </li>
            <ul>
            </div>
            <div class="paragrah-container">
              <p><?php the_field('about_me_paragraph4', 159) ?>

            </div>
            </div>
</section>

<?php get_footer (); ?>
