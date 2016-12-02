<?php 
/*
 *		Template Name: Page Upskill
 *		Description: Call to Action
 */
?>

<?php get_header(); ?>

  <div class='main-section'>
    <?php 
      if ( have_posts() ) :
    ?>
        <ul class="posts">
          <li>
            <?php the_content(); ?>
          </li>
        </ul>

      <?php
        while ( have_posts() ) : the_post();
          get_template_part( 'content', 'page' );
      ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <?php the_title('<h1 class="entry-title">','</h1>' ); ?>

    <?php if( has_post_thumbnail() ): ?>
            <div class="thumbnails">
              <?php the_post_thumbnail('thumbnail'); ?>
            </div>
    <?php endif; ?>

          <small>
            <?php the_category(); ?>
          </small>
    <?php 
			  endwhile;
      endif;
    ?>
  </div>

<?php get_footer(); ?>
