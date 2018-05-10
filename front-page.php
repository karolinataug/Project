<?php get_header(); ?>
<main>

  <?php
    $image_id = get_field ('background_image' , 23);
    $image_url = wp_get_attachment_image_src( $image_id, 'background_image' );
  ?>
  <section class="background-imagine-section" id="home" style="background-image: url('<?= $image_url [0]?>');">
    <div class="container">
      <div class="heading-container">
        <h1><span><?php the_field('site_heading', 23) ?></span></h1>
        <h1><span><?php the_field('site_tagline', 23) ?></span></h1>
      </div>
    </div>
  </section>

    <?php
      $serviceQuery = new WP_Query ( array(
        'post_type'           => 'service',
        'post_per_page'       => 4,
        'orderby'             => 'date',
        'order'               => 'ASC'
      ));
    ?>

  <section class="service-section" id="services">
    <div class="h3-container">
      <h3>SERVICES</h3>
    </div>
    <div class="span-container">
      <span class ="bottom_line"></span>
    </div>
    <div class="features-container">
      <div class="flex-container">
        <nav>
          <ul class="feature-list">
            <?php
              if( $serviceQuery->have_posts() ):
                while( $serviceQuery->have_posts() ):
              $serviceQuery->the_post();
            ?>
            <li class="feature-item">
              <i class="<?php the_field('service_icon', get_the_ID() )?>"></i>
              <h4><?php the_field( 'service_name', get_the_ID() ) ?></h4>
              <p><?php the_field( 'service_description', get_the_ID() )?></p>
            </li>
            <?php endwhile;endif?>
          </ul>
        </nav>
      </div>
    </div>
  </section>

  <?php
  $categories = get_categories(array (
    'post_type'               =>'portfolio',
    'hide_empty'              => false
  ));

  $portfolioQuery = new WP_Query (array(
    'post_type'               => 'portfolio',
    'post_per_page'           => 8,
    'orderby'                 => 'date',
    'order'                   => 'DESC'
  ));
  ?>

  <section class="Portfolio-section" id="portfolio">
    <div class="portfolio-container">
      <h3>PORTFOLIO</h3>
    </div>
    <div class="portfolio-span-container">
      <span class ="bottom_line"></span>
    </div>
    <nav>
      <ul class="Portfolio-navigation">
        <?php foreach( $categories as $category ):
              if( $category->slug !== 'uncategorized' ):
        ?>
          <li><a href="#ALL" data-filter="<?= '.' .$category->slug; ?>"><?=$category->name?></a></li>
            <?php endif;endforeach; ?>
      </ul>
    </nav>
    <div class="images-list-container">
      <ul class="images-list">
        <?php while ($portfolioQuery->have_posts() ):
                $portfolioQuery->the_post();
                $post_categories = get_the_category(get_the_ID() );
                $categories_string ='';
                foreach($post_categories as $category) {

                $categories_string .= ' ' . $category->slug;
              }
        ?>
        <li class= "<?=$categories_string?>"> <!--panoramas all-->
          <figure>
            <img src="<?php the_post_thumbnail_url('portfolio_image')?>" alt="picture">
          </figure>
        </li>
      <?php endwhile; ?>
      </ul>
    </div>
  </section>

  <?php
    $image_id = get_field ('just_default_imagine' , 23);
    $image_url = wp_get_attachment_image_src( $image_id, 'just_default_imagine' );
  ?>
  <section class="just-default-section" id="features">
    <div class="h4-container">
      <h3>JUST DEFAULT</h3>
    </div>
    <div class="span-container1">
      <span class ="bottom_line"></span>
    </div>
    <div class="flex-container2">
      <div class="paragrah-container">
        <p><?php the_field('just_default_paragraph1', 23) ?></p>
        <p><?php the_field('just_default_paragraph2', 23) ?></p>
          <div class="botton-container">
            <ul>
              <li><a href="<?php the_permalink(159)?>">Visit me</a></li>
            </ul>
          </div>
      </div>
      <div class="picture1-container">
        <ul>
          <li>
        <img src= "<?= $image_url [0]?>;" alt="">
        <ul>
      </div>
    </div>
  </section>

  <section class="just-default2-section">
    <div class="flex-container">
    <div class="h3-container">
      <h4>JUST DEFAULT SECTION</h4>
    </div>
      <div class="twitter-container">
        <i class="<?php the_field('just_default_section_icon', 23 ) ?>"></i>
      </div>
    </div>
    <div class="span-container3">
      <span class ="bottom_line"></span>
    </div>
    <div class="paragrah1-container">
      <p><?php the_field('just_default_section_paragraph', 23) ?></p>
    </div>
  </section>

  <?php
    $sliderQuery = new WP_QUERY( array(
      'post_type'             => 'slider',
      'posts_per_page'        => -1,
      'orderby'               => 'date',
      'order'                 => 'DESC',
    ) );
  ?>

  <section class="slider-section">
    <div class="slider1-container">
      <h4>PICTURES </h4>
    </div>
    <div class="portfolio-span-container">
      <span class ="bottom_line"></span>
    </div>
    <div class="slider-container">
      <?php if( $sliderQuery->have_posts() ) :
              while( $sliderQuery->have_posts() ) :
                $sliderQuery->the_post();

                $image_id = get_field('slide_image', get_the_ID());
                $image = wp_get_attachment_image_src( $image_id, 'slide_image' );
      ?>
      <div><img src= "<?= $image[0]?>;" alt=""></div>
      <?php endwhile ; endif ;?>
    </div>
  </section>

  <?php
    $image_id = get_field ('person_information_image' , 23);
    $image_url = wp_get_attachment_image_src( $image_id, 'person_information_image' );
  ?>

  <section class="picture-container" style="background-image: url('<?= $image_url [0]?>');">

    <div class="h5-container">
      <h4>WHO IS JOHN DUE?</h4>
    </div>
    <div class="span-container">
      <span class ="bottom_line"></span>
    </div>
    <div class="flex-container2">
      <div class="paragrah2-container">
        <p><?php the_field('person_information_paragraph1', 23) ?><!--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.--></p>
        <p><?php the_field('person_information_paragraph2', 23) ?><!--Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.--> </p>
      </div>
      <div class="paragrah-social-container">
        <p><?php the_field('person_information_paragraph3', 23) ?><!--Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.--></p>
          <nav>
            <ul class="social-container">
              <?php if (get_field ('twitter_icon', 23) !='' ) : ?>
              <li><a href="<?php the_field('twitter_icon', 23 ) ?>"> <i class="fab fa-twitter"></i></a></li>
              <?php endif; ?>
              <?php if (get_field ('google_icon', 23) !='' ) : ?>
              <li><a href="<?php the_field('google_icon', 23) ?>"> <i class="fab fa-google-plus-g"></i></a></li>
              <?php endif; ?>
              <?php if (get_field ('basketball_icon', 23) !='' ) : ?>
              <li><a href="<?php the_field('basketball_icon', 23) ?>"> <i class="fas fa-basketball-ball"></i></a></li>
              <?php endif; ?>
              <?php if (get_field ('coffe_icon', 23) !='' ) : ?>
              <li><a href="<?php the_field('coffe_icon', 23 ) ?>"> <i class="fas fa-coffee"></i></a></li>
              <?php endif; ?>
            </ul>
          </nav>
      </div>
    </div>
  </section>

  <section class="testimonials-section">
    <div class="flex-container">
      <div class="testimonials-container">
        <h4>TESTIMONIALS</h4>
      </div>
      <div class="quote-container">
        <i class="<?php the_field('testimonials_icon', 23 )?>"></i>
      </div>
    </div>
    <div class="portfolio-span-container">
      <span class ="bottom_line"></span>
    </div>
    <div class="paragrah3-container">
      <p><?php the_field('testimonials_paragraph', 23) ?></p>
      <p1><?php the_field('testimonials_quote', 23) ?></p1>
    </div>
  </section>

  <?php
    $image_id = get_field ('contact_image' , 23);
    $image_url = wp_get_attachment_image_src( $image_id, 'contact_image' );
  ?>

  <section class="contact-section" id="contact" style="background-image: url('<?= $image_url [0]?>');">
    <div class="h5-container">
      <h4>CONTACT</h4>
    </div>
    <div class="span-container">
      <span class ="bottom_line"></span>
    </div>
    <div class="flex-container2">
      <div class="form-container">
        <form>
          <?php echo strip_tags(do_shortcode('[contact-form-7 id="71" title="contact"]'),'<input><form><textarea><p>') ?>
        </form>
      </div>
      <div class="information-container">
       <p><?php the_field('contact_information', 23) ?></p>
        <div class="adress-container">
          <p><?php the_field('contact_information_address', 23) ?><br></p>
          <p>Phone: <?php the_field('contact_information_phone', 23) ?><br></p>
          <p>Fax: <?php the_field('contact_information_fax', 23) ?><br></p>
          <p>Email: <a href="mailto:<?php the_field('contact_information_email', 23) ?>"><?php the_field('contact_information_email', 23) ?> </a> <br></p>
          <p>Follow on: <a href="mailto<?php the_field('contact_information_social_media', 23) ?>"><?php the_field('contact_information_social_media', 23) ?></a></p>
        </div>
      </div>
    </div>
    <div class="subject-container">
      <?php echo strip_tags(do_shortcode('[contact-form-7 id="93" title="Contact Subject"]'),'<input><form><textarea><p>') ?>
    </div>
    <div class="message-container">
      <?php echo strip_tags(do_shortcode('[contact-form-7 id="94" title="Contact Message"]'),'<input><form><textarea><p>') ?><!--<input type="submit" name="Message" value="MESSAGE">-->
    </div>
  </section>

  <section class="google-map-container">

    <?php
    $location = get_field('location', 23);
      if( !empty($location) ):
    ?>
    <div class="acf-map">
	    <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
    </div>
    <?php endif; ?>
  </section>
</main>
  <?php get_footer(); ?>
