<?php
/*
Template Name: Discography
*/
?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php get_sidebar(); ?>

<!-- Other Albums -->
<section class="other-albums">
  <ul class="small-block-grid-2 large-block-grid-3">
    <?php
      $albums = get_pages(array('child_of' => 16,
                                'sort_order' => 'desc',
                                'sort_column' => 'menu_order'));

      foreach($albums as $album) {
        $album_title = $album->post_title;
        $id = $album->ID;
        $url = $album->guid;
    ?>

      <li>
        <div class="row">
          <div class="small-12 columns">
            <a href="<?php echo $url; ?>">
              <img src="<?php echo the_field('cover', $id); ?>">
            </a>
          </div>
        </div>

        <div class="row">
          <div class="small-7 columns album-title">
            <h4><?php echo $album_title ?></h4>
          </div>

          <div class="small-5 columns album-year">
            <h5><?php echo the_field('year', $id); ?></h5>
          </div>
        </div>
      </li>
    <?php } ?>

  </ul>
</section>
<!-- /Other Albums -->

<?php get_footer(); ?>
