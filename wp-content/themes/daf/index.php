<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_sidebar(); ?>

<div class="row">
  <div class="small-12 columns">
    <h2>News</h2>
  </div>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="article-block">
    <div class="row">
      <div class="small-6 columns">
        <h3><?php the_title(); ?></h3>
      </div>

      <div class="small-6 columns">
        <p class="date-and-author">
          posted <?php the_date(); ?> by <?php the_author(); ?>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns">
        <?php the_excerpt(); ?>

        <a class="button" href="<?php the_permalink(); ?>">Read More</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="small-7 small-push-5 medium-3 medium-push-9 columns">
      <?php previous_posts_link('Newer Articles'); ?>
      <?php next_posts_link('Older Articles') ?>
    </div>
  </div>

<?php endwhile; else : ?>
  <div class="row">
    <div class="small-12 columns">
      <h3>No News Yet</h3>
      <p>
        Not much going on in DAF land.
      </p>
    </div>
  </div>
<?php endif; ?>

<?php get_footer(); ?>
