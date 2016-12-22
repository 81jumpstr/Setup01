<?php 
/*
 *    Template Name: Page-Dynamic-Features
 *    Description: Collection of random features
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


            <div class="text">
              <?php the_content(); ?>
            </div>
            
          </article>
    <?php 
        endwhile;
      endif;
    ?>
  </div>

<?php get_footer(); ?>
