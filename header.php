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
  <?php get_template_part( 'template-parts/type-of-header' );?>
  <!-- #header -->