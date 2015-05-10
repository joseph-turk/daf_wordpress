<!-- Off-Canvas Navigation -->
<nav id="off-canvas">
  <ul>
    <li>
      <a href="<?php echo get_site_url(); ?>" class="<?php
        if (is_front_page()) {
          echo "selected";
        } ?>">Home</a>
    </li>
    <li>
      <a href="<?php echo get_permalink(54); ?>" class="<?php
        if (is_home()) {
          echo "selected";
        } ?>">News</a>
    </li>
    <li>
      <a href="<?php echo get_permalink(16); ?>" class="<?php
        if (is_page('Discography')) {
          echo "selected";
        } ?>">Discography</a>
    </li>
  </ul>
</nav>
<!-- /Off-Canvas Navigation -->

<div id="content">
  <div class="wrapper">
