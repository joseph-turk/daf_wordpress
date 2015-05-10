</div> <!-- /.wrapper -->

<!-- Footer -->
<footer>
  <div class="row">
    <div class="small-6 columns">
      <ul class="small-block-grid-2 medium-block-grid-4 social">
        <li>
          <a href="https://soundcloud.com/doubles-as-a-frisbee"><img src="<?php bloginfo('template_directory'); ?>/img/logo-soundcloud.png"></a>
        </li>
        <li>
          <a href="https://www.youtube.com/results?search_query=doubles+as+a+frisbee"><img src="<?php bloginfo('template_directory'); ?>/img/logo-youtube.png"></a>
        </li>
        <li>
          <a href="https://twitter.com/doublesasafrisb"><img src="<?php bloginfo('template_directory'); ?>/img/logo-twitter.png"></a>
        </li>
        <li>
          <a href="https://www.facebook.com/pages/Doubles-as-a-Frisbee/104365924904"><img src="<?php bloginfo('template_directory'); ?>/img/logo-facebook.png"></a>
        </li>
      </ul>
    </div>
    <div class="small-6 columns">
      <nav>
        <ul>
          <li>
            <a href="<?php echo get_site_url(); ?>">Home</a>
          </li>
          <li>
            <a href="<?php echo get_permalink(54); ?>">News</a>
          </li>
          <li>
            <a href="<?php echo get_permalink(16); ?>">Discography</a>
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
