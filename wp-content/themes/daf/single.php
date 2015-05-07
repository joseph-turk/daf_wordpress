<?php
$page = 'article';
$articleTitle = 'Video Time';
$pageTitle = 'Doubles as a Frisbee | News | ' . $articleTitle;

include('header.php');
include('nav.php');
?>

<!-- Hero Image -->
<div class="hero">
  <img class="lead" src="img/photo-crouch.jpg">
</div>
<!-- /Hero Image -->

<!-- Article -->
<article>
  <div class="row">
    <div class="small-12 columns">
      <h2>Article Title</h2>
    </div>
  </div>

  <div class="row">
    <div class="small-12 columns">
      <p class="teaser">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam volutpat id sem commodo bibendum. Curabitur a nisi auctor, aliquam dui vitae, tincidunt justo.
      </p>

      <p>
        Maecenas cursus volutpat eleifend. Maecenas quis lacus blandit, posuere magna sit amet, mattis ante. Vestibulum ut ullamcorper nisi. Aenean commodo euismod turpis, ac dapibus mi euismod sit amet. Donec pharetra nunc vitae risus accumsan sagittis. Praesent pretium dapibus lacus nec pharetra. Mauris accumsan eros ac mi pretium sagittis.
      </p>

      <p>
        Proin lacus est, dictum eu sapien vitae, pulvinar maximus ex. In finibus cursus consequat. Sed et sem vitae massa sodales vehicula condimentum sit amet lacus. Nullam eros nibh, feugiat a lorem non, molestie placerat orci.
      </p>

      <p>
        Ut eu sapien arcu. Cras non imperdiet quam. Duis sed mi sit amet elit convallis pharetra quis non felis. Etiam laoreet lectus eu ante semper, et fermentum turpis lobortis. Praesent eu molestie purus. Etiam elit risus, scelerisque quis euismod quis, porta varius odio. Phasellus a justo metus. Quisque eget purus non lacus bibendum congue congue nec dolor.
      </p>

      <img class="support" src="img/photo-photo-op.jpg">

      <p>
        Duis in felis faucibus, iaculis mi et, semper enim. Donec in diam ac mauris dictum tristique. Duis a diam id elit viverra venenatis sollicitudin vitae odio.
      </p>
    </div>
  </div>
</article>
<!-- /Article -->

<div class="row">
  <div class="small-12 columns">
    <p class="date-and-author">
      posted MM/DD/YY by Someone
    </p>
  </div>
</div>

<?php include('footer.php'); ?>
