<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_sidebar(); ?>

<!-- Hero Image -->
<div class="hero">
  <img src="<?php the_field('banner_image') ?>">
</div>
<!-- /Hero Image -->

<!-- Latest News -->
<div class="row">
  <div class="small-12 columns">
    <h2>Latest News</h2>
  </div>
</div>

<?php $my_query = new WP_Query('showposts=1'); ?>

<?php /* If there are NO posts to display */ ?>
<?php if ( ! have_posts() ) : ?>
  <div class="row">
    <div class="small-12 columns">
      <h3>No news yet</h3>
      <p>
        Nothing much happening, I guess.
      </p>
    </div>
  </div>
<?php endif; ?>


<?php /* If there ARE posts to display */ ?>
<?php while ($my_query->have_posts()) : $my_query->the_post() ?>

  <div class="row">
    <div class="small-12 columns">
      <h3><?php the_title(); ?></h3>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <?php the_excerpt(); ?>

      <a class="button" href="<?php the_permalink(); ?>">Read More</a>
    </div>
  </div>

<?php endwhile; ?>


<?php /* If there are NO posts to display */ ?>
<?php if ( ! have_posts() ) : ?>
  <div class="row">
    <div class="small-12 columns">
      <h3>No news yet</h3>
      <p>
        Nothing much happening, I guess.
      </p>
    </div>
  </div>
<?php endif; ?>
<!-- /Latest News -->

<?php get_footer(); ?>
