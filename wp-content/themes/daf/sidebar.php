<!-- Off-Canvas Navigation -->
<nav id="off-canvas">
  <ul>
    <li>
      <a href="index.php" class="<?php
        if ($page == 'home') {
          echo "selected";
        } ?>">Home</a>
    </li>
    <li>
      <a href="news.php" class="<?php
        if ($page == 'news') {
          echo "selected";
        } ?>">News</a>
    </li>
    <li>
      <a href="discography.php" class="<?php
        if ($page == 'discography') {
          echo "selected";
        } ?>">Discography</a>
    </li>
  </ul>
</nav>
<!-- /Off-Canvas Navigation -->

<div id="content">
  <div class="wrapper">
