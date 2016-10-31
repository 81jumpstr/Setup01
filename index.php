<?php 
get_header();
get_sidebar();
if ( have_posts() ) : 
?>

  <ul>
    <?php while ( have_posts() ) : the_post(); ?>
	  <li>
	    <?php the_content(); ?>
	  </li>
    <?php endwhile; ?>
  </ul>

<?php
  endif;
  get_footer();
?>
