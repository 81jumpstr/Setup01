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
  ?>
      <ul class="posts">
    <?php
      while ( have_posts() ) : the_post();
    ?>
        <li>
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

          <?php the_content(); ?>
        </li>
    <?php 
      endwhile;
    ?>
      </ul>
  <?php
    endif;
  ?>
  </div>

<?php get_footer(); ?>
