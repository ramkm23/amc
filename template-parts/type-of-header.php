<?php if( get_field( 'choose-header-type','option') == 'Horizontal' ): ?>
    <header id="header">
        <div class="container">
            <div id="logo" class="pull-left">
            <h1><a href="<?php echo get_home_url(); ?>" class="scrollto"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/C%20logo.png"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>
            <nav id="nav-menu-container">
                <?php get_template_part( 'template-parts/menu-list' );?>
            </nav><!-- #nav-menu-container -->
        </div>
    </header>
<?php endif; ?>
<?php if( get_field( 'choose-header-type','option') == 'Vertical' ): ?>
    <header id="header" class="verticle-header">
        <div id="logo" class="vertical-header-logo">
        <h1><a href="<?php echo get_home_url(); ?>" class="scrollto"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/ibj-logo.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>       
        <nav id="nav-menu-container" class="vertical-header-menu">
         <?php get_template_part( 'template-parts/menu-list' );?>
        </nav><!-- #nav-menu-container -->                                                                                                                           
    </header>
<?php endif; ?>

