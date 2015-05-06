<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="ID=edge">
    <title><?php wp_title( ' | ', true, 'right' ); ?></title>
    <meta name="description" content="The best band in the world">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- link rel="apple-touch-icon" href="apple-touch-icon.png" -->
    <!-- Place favicon.ico in the root directory -->

    <link href='http://fonts.googleapis.com/css?family=Slabo+27px|Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
    
    <?php wp_head(); ?>
  </head>

  <body>
    <div class="canvas">
      <!-- Header -->
      <header>
        <div class="row">
          <div class="small-10 columns">
            <h1>Doubles as a Frisbee</h1>
          </div>

          <div class="small-2 medium-1 columns">
            <svg version="1.1" id="icon-menu" class="icon-menu toggle" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
  <path id="svg-path-1" class="off" d="M32,3.145C32,4.722,30.485,6,28.617,6H3.383C1.515,6,0,4.722,0,3.145v-0.29C0,1.278,1.515,0,3.383,0h25.234
  C30.485,0,32,1.278,32,2.855V3.145z"/>
  <path id="svg-path-2" class="off" d="M32,16.145C32,17.722,30.485,19,28.617,19H3.383C1.515,19,0,17.722,0,16.145v-0.29C0,14.278,1.515,13,3.383,13h25.234
  C30.485,13,32,14.278,32,15.855V16.145z"/>
  <path id="svg-path-3" class="off" d="M32,29.145C32,30.722,30.485,32,28.617,32H3.383C1.515,32,0,30.722,0,29.145v-0.289C0,27.278,1.515,26,3.383,26h25.234
  C30.485,26,32,27.278,32,28.855V29.145z"/>
  </svg>
          </div>
        </div>
      </header>
      <!-- /Header -->
