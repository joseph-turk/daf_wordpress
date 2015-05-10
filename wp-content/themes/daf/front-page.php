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

<?php $the_query = new WP_Query('showposts=1'); ?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
<?php else : ?>
  <div class="row">
    <div class="small-12 columns">
      <h3>No News Yet</h3>
      <p>
        Nothing much happening, I guess.
      </p>
    </div>
  </div>
<?php endif; ?>
<!-- /Latest News -->

<?php get_footer(); ?>
