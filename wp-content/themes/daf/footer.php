</div> <!-- /.wrapper -->

<!-- Footer -->
<footer>
  <div class="row">
    <div class="small-6 columns">
      <ul class="small-block-grid-2 medium-block-grid-4 social">
        <li>
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-soundcloud.png"></a>
        </li>
        <li>
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-youtube.png"></a>
        </li>
        <li>
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-twitter.png"></a>
        </li>
        <li>
          <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo-facebook.png"></a>
        </li>
      </ul>
    </div>
    <div class="small-6 columns">
      <nav>
        <ul>
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="news.php">News</a>
          </li>
          <li>
            <a href="discography.php">Discography</a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <p class="copyright">
        &copy; <?php
        $year = date('Y');
        echo $year; ?> Doubles as a Frisbee
      </p>
    </div>
  </div>
  <?php wp_footer(); ?>
</footer>
<!-- /Footer -->

</div> <!-- /#content -->
</div> <!-- /.canvas -->
</body>
</html>
