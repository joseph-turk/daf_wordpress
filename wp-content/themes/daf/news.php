<?php
/*
Template Name: News
*/
?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_sidebar(); ?>

<div class="row">
  <div class="small-12 columns">
    <h2>News</h2>
  </div>
</div>

<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $args = array( 'paged' => $paged );
  $article_list = new WP_Query( $args );
?>

<?php /* If there are NO posts */ ?>
<?php if ( ! $article_list->have_posts() ) : ?>
  <div class="row">
    <div class="small-12 columns">
      <h3>No News Yet</h3>
      <p>
        Not much going on in DAF land.
      </p>
    </div>
  </div>
<?php endif; ?>

<?php /* If there ARE posts */ ?>
<?php while ( $article_list->have_posts() ) : $article_list->the_post(); ?>
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
<?php endwhile; ?>


<?php get_footer(); ?>
