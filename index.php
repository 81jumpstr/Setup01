<?php get_header(); ?>

  <div class='main-section'>
    <?php get_sidebar(); ?>
    <?php if ( have_posts() ) : ?>
      <ul class="posts">
        <?php while ( have_posts() ) : the_post(); ?>
          <li>
            <?php the_content('&raquo;'); ?>
          </li>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>

<?php get_footer(); ?>
