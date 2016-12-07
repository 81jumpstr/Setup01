<?php get_header(); ?>

  <div class='main-section'>
    <?php 
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

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

    <?php 
        endwhile;
      endif;
    ?>
  </div>

<?php get_footer(); ?>
