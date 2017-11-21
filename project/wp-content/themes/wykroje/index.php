<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
  <!-- post -->
    <h2><?php the_title(); ?></h2>
    <p><?php the_excerpt(); ?></p>
    <p><?php the_post_thumbnail(); ?></p>
<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>
