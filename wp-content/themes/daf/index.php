<?php get_header(); ?>
<?php get_sidebar(); ?>

<!-- Hero Image -->
<div class="hero">
  <img src="img/photo-crouch.jpg">
</div>
<!-- /Hero Image -->

<!-- Latest News -->
<div class="row">
  <div class="small-12 columns">
    <h2>Latest News</h2>
  </div>
</div>

<?php /* If there are NO posts to display */ ?>
<?php if ( ! have_posts() ) : ?>
  <div class="row">
    <div class="small-12 columns">
      <h1>No news yet</h1>
      <p>
        Nothing much happening, I guess.
      </p>
    </div>
  </div>
<?php endif; ?>

<?php /* If there ARE posts to display */ ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="post">
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

    <?php if ( is_archive() || is_search() ) : // Only display excerpts for archives and search. ?>
            <?php the_excerpt(); ?>
    <?php else : ?>
            <?php the_content('Read More'); ?>
    <?php endif; ?>

    <div class="dots"></div>

    <a class="button" href="<?php the_permalink(); ?>">Read More</a>
  </div><!-- /.post -->
<?php endwhile; ?>

<?php if ( $wp_query->max_num_pages > 1 ) : ?>
        <div id="older-posts"><?php next_posts_link('Older Posts'); ?></div>
        <div id="newer-posts"><?php previous_posts_link('Newer Posts'); ?></div>
<?php else: ?>
        <div id="only-page">No newer/older posts</div>
<?php endif; ?>

<div class="spacer"></div>

<?php get_footer(); ?>
