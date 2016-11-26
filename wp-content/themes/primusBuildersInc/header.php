<!doctype html>
<html lang="en-US">
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Primus Builders Inc.</title>

  <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/img/favicon.png" type="image/png">

  <link rel="stylesheet" href
  ="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <meta name="description" content="a personal blog">
  <meta name="keywords" content="blog web development front-end">
  <meta name="author" content="">

  <meta name="robots" content="index, follow">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">

  <?php wp_head(); ?>
</head>
<body>

  <header>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="line-top">
        <div class="container">
          <div class="row">
            <div class="hidden-xs hidden-sm col-md-8 col-md-offset-4">
              <ul>
                <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>
                  <span>1.773.251.5917</span>
                </a>
              </li>
              <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i>
                <span>primusbuilders@gmail.com</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo site_url(); ?>/#home">Primus Builders Inc.</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo site_url(); ?>/page-contact-us/">Request a Quote</a></li>
        <li><a href="<?php echo site_url(); ?>/#what-we-do">What We Do</a></li>

        <li><a href="<?php echo site_url(); ?>/aboutus/">About Us</a></li>
        <li><a href="https://www.paypal.me/primusbuilders">Pay Bill</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="main-header" id="home">
  <div class="content">
    <h1><?php echo get_bloginfo( 'name' ); ?></h1>
    <h2><?php echo get_bloginfo( 'description' ); ?></h2>

  </div>
</div> <!-- close main header -->

</header>
