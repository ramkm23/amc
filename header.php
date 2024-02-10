<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <!-- Favicons -->
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/img/favicon.png" rel="icon">
  <link href="<?php echo esc_url(get_template_directory_uri()); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">
  	<?php wp_head(); ?>
	<?php if( !empty( get_field( 'other-site-head-script', 'option') ) ): ?>
		<?php echo get_field( 'other-site-head-script', 'option' ); ?>
	<?php endif; ?>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

</head>
<?php get_template_part( 'template-parts/top-bar' );?>

 <body>
	<?php if( !empty( get_field( 'other-site-body-script', 'option') ) ): ?>
		<?php echo get_field( 'other-site-body-script', 'option' ); ?>
	<?php endif; ?>
    <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="<?php echo get_home_url(); ?>" class="scrollto"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/C%20logo.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="https://creativewebstech.com/">Home</a></li>
          <li><a href="https://creativewebstech.com/#about">About Us</a></li>
          <li><a href="https://creativewebstech.com/#services">Services</a></li>
          <li><a href="https://creativewebstech.com/#porject">Portfolio</a></li>
          <li class="menu-has-children" style="display: none;"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="https://creativewebstech.com/blogs/">Blogs</a></li>
          <li><a href="https://creativewebstech.com/#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->