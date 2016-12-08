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
            <?php the_content(); ?>
          </article>
    <?php 
        endwhile;
      endif;
    ?>
  </div>

<?php get_footer(); ?>
