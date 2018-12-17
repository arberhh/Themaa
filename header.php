<!DOCTYPE html>
<html>
<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php bloginfo('name'); ?></title>
  
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo( 'template_url' ); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php bloginfo('template_url'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles and scripts for this template -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body id="page-top">
    <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top" id="navMenu">
    <div class="container">
      <a class="navbar-brand" href="<?php echo get_site_url(); ?>">Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <?php  wp_nav_menu_no_ul(); ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container header">
      <div class="intro-text">
        <div class="intro-lead-in">Welcome To Our Newsletter!</div>
        <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="wordpress/membership-account/membership-levels/">Subscribe!</a>
        <a class="btn btn-primary btn-xl text-uppercase" href="<?php echo wp_login_url(); ?>">&nbsp;&nbsp;&nbsp;Log  in! &nbsp;&nbsp;&nbsp;&nbsp;</a>
      </div>
    </div>
  </header>