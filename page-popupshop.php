<?php 
/*
 *		Template Name: Page-Popupshop
 *		Description: Call to Action
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
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_title('<h1 class="entry-title">','</h1>' ); ?>

            <small>
              <?php the_category(); ?>
            </small>

            <div>
              <?php the_content(); ?>
              <h3>Sign Up: </h3>
              <button href="#" class="intervention">Events</button>
              <button href="#" class="workshop">Setupshop</button>
            </div>
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
