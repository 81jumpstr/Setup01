<?php 
/*
 *    Template Name: Page-About
 *    Description: About site, Contacts Us, the Team combined
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

          <div class="team">
            <ul>
              <div class="tmember01">
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember06.jpg" alt="contacts-image01">
                  <p>Name:</p>
                  <p>Porfolio:</p>
                  <p>Quote:</p>
                  <hr>
                </li>
              </div>
              <div class="tmember02">
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember05.jpg" alt="contacts-image02">
                  <p>Name:</p>
                  <p>Porfolio:</p>
                  <p>Quote:</p>
                  <hr>
                </li>
              </div>
              <div class="tmember03">
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember04.jpg" alt="contacts-image03">
                  <p>Name:</p>
                  <p>Porfolio:</p>
                  <p>Quote:</p>
                  <hr>
                </li>
              </div>
              <div class="tmember04">
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember03.jpg" alt="contacts-image04">
                  <p>Name:</p>
                  <p>Porfolio:</p>
                  <p>Quote:</p>
                  <hr>
                </li>
              </div>
              <div class="tmember05">
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember02.jpg" alt="contacts-image05">
                  <p>Name:</p>
                  <p>Porfolio:</p>
                  <p>Quote:</p>
                  <hr>
                </li>
              </div>
              <div class="tmember06">
                <li>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tmember01.jpg" alt="contacts-image06">
                  <p>Name:</p>
                  <p>Porfolio:</p>
                  <p>Quote:</p>
                  <hr>
                </li>
              </div>
            </ul>      
          </div>

          <small>
            <?php the_category(); ?>
          </small>

          <?php the_content(); ?>

    <?php 
        endwhile;
      endif;
    ?>
  </div>

<?php get_footer(); ?>
