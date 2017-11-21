<?php
/**
 * Created by PhpStorm.
 * User: kazik
 * Date: 12.11.17
 * Time: 19:50
 */
get_header(); ?>
<section class="bg-faded">
    <div class="container">
        <ul class="slider">












            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <!-- post -->
                <li class="slide" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'full')); ?>); height: 200px; background-size: cover; background-repeat: no-repeat">

                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?>

                </li>
            <?php endwhile; ?>
                <!-- post navigation -->
            <?php else: ?>
                <!-- no posts found -->
            <?php endif; ?>
        </ul>
    </div>
</section>
<?php get_footer(); ?>
