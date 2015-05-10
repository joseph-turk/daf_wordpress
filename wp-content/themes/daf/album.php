<?php
/*
Template Name: Album
*/
?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_sidebar(); ?>

<?php while ( have_posts() ) : the_post(); ?>
  <section class="album-details">
    <div class="row">
      <div class="small-12 large-7 columns">
        <img src="<?php echo the_field('cover'); ?>">

        <div class="small-6 small-centered large-8 large-centered columns">
          <a href="<?php echo content_url(); ?>/albums/<?php echo  the_field('download_link'); ?>" class="download button">Download</a>
        </div>
      </div>

      <div class="small-12 large-5 columns">
        <div class="small-7 large-8 columns album-title">
          <h2><?php the_title(); ?></h2>
        </div>

        <div class="small-5 large-4 columns album-year">
          <h3><?php echo the_field('year'); ?></h3>
        </div>

        <div class="small-10 small-centered medium-6 medium-centered large-12 columns">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
<?php endwhile; ?>

<?php get_footer(); ?>
