<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_sidebar(); ?>

<?php /* If the post could NOT be found */ ?>
<?php if ( ! have_posts() ) : ?>
  <div class="row">
    <div class="small-12 columns">
      <h3>Article Not Found</h3>
      <p>
        Sorry, but that's not a real article. Try again.
      </p>
    </div>
  </div>
<?php endif; ?>

<?php /* If the post COULD be found */ ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="hero">
    <img src="<?php the_field('hero_image'); ?>">
  </div>

  <article>
    <div class="row">
      <div class="small-12 columns">
        <h2><?php the_title(); ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns">
        <?php the_content(); ?>
      </div>
    </div>

    <div class="row">
      <div class="small-12 columns">
        <p class="date-and-author">
          posted <?php the_date(); ?> by <?php the_author(); ?>
        </p>
      </div>
    </div>
  </article>
<?php endwhile; ?>

<?php get_footer(); ?>
