<?php 
/*
 *    Template Name: Page-About
 *    Description: About site and Contacts Us, combined
 */
?>

<?php get_header(); ?>

  <div class='main-section'>

    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
          <article <?php post_class(); ?>>
            <?php the_title('<h1 class="entry-title">','</h1>' ); ?>

            <?php 
              if( has_post_thumbnail() ): 
            ?>
                <div class="thumbnails">
                  <?php the_post_thumbnail('thumbnail'); ?>
                </div>
            <?php 
              endif; 
            ?>
        
            <small>
              <?php the_category(); ?>
            </small>

            <ul class="portfolio-column">
              <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember06.jpg" alt="contacts-image01">
                <p>Name:</p>
                <p>Porfolio:</p>
                <p>Quote:</p>
              </li>
              <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember05.jpg" alt="contacts-image02">
                <p>Name:</p>
                <p>Porfolio:</p>
                <p>Quote:</p>
              </li>
              <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember04.jpg" alt="contacts-image03">
                <p>Name:</p>
                <p>Porfolio:</p>
                <p>Quote:</p>
              </li>
              <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember03.jpg" alt="contacts-image04">
                <p>Name:</p>
                <p>Porfolio:</p>
                <p>Quote:</p>
              </li>
              <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember02.jpg" alt="contacts-image05">
                <p>Name:</p>
                <p>Porfolio:</p>
                <p>Quote:</p>
              </li>
              <li>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember01.jpg" alt="contacts-image06">
                <p>Name:</p>
                <p>Porfolio:</p>
                <p>Quote:</p>
              </li>
            </ul>
            <div class="text">
              <?php the_content(); ?>
            </div>
            
          </article>
    <?php 
        endwhile;
      endif;
    ?>

    <ul class="contacts-socialmedia">
      <li>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tel.png" alt="contacts-tel-image" />
        <p>Tel. #:</p>
      </li>
      <li>
        <a href="https://www.gmail.com">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email.png" alt="contacts-email-image" />
        </a>
      </li>
      <li>
        <a href="https://www.facebook.com">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="contacts-facebook-image" />
        </a>
      </li>
      <li>
        <a href="https://www.twitter.com">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="contacts-twitter-image" />
        </a>
      </li>
      <li class="contacts-linkedin">
        <a href="https://www.linkedin.com">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="contacts-linkedin-image" />
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.png" alt="contacts-instagram-image" />
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.png" alt="contacts-youtube-image" />
        </a>
      </li>
      <li>
        <a href="https://www.google.com">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gplus.png" alt="contacts-gplus-image" />
        </a>
      </li>
      <li>
        <a href="https://www.github.com">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/github.png" alt="contacts-github-image" />
        </a>
      </li>
    </ul>
  </div>

<?php get_footer(); ?>
