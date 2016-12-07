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

          <?php if( has_post_thumbnail() ): ?>
            <div class="thumbnails">
              <?php the_post_thumbnail('thumbnail'); ?>
            </div>
          <?php endif; ?>

          <small>
            <?php the_category(); ?>
          </small>

          <ul>
            <li class="contacts-tel">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tel.png" alt="contacts-tel-image" />
              <p>Tel. #:</p>
            </li>
            <li class="contacts-email">
              <a href="https://www.gmail.com">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/email.png" alt="contacts-email-image" />
              </a>
            </li>
            <li class="contacts-facebook">
              <a href="https://www.facebook.com">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/facebook.png" alt="contacts-facebook-image" />
              </a>
            </li>
            <li class="contacts-twitter">
              <a href="https://www.twitter.com">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/twitter.png" alt="contacts-twitter-image" />
              </a>
            </li>
            <li class="contacts-linkedin">
              <a href="https://www.linkedin.com">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/linkedin.png" alt="contacts-linkedin-image" />
              </a>
            </li>
            <li class="contacts-instagram">
              <a href="https://www.instagram.com">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/instagram.png" alt="contacts-instagram-image" />
              </a>
            </li>
            <li class="contacts-youtube">
              <a href="https://www.youtube.com">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube.png" alt="contacts-youtube-image" />
              </a>
            </li>
            <li class="contacts-gplus">
              <a href="https://www.google.com">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/gplus.png" alt="contacts-gplus-image" />
              </a>
            </li>
            <li class="contacts-github">
              <a href="https://www.github.com">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/github.png" alt="contacts-github-image" />
              </a>
            </li>
            <hr>
          </ul>

          <?php the_content(); ?>

    <?php 
        endwhile;
      endif;
    ?>
  </div>

<?php get_footer(); ?>
