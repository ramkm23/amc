<?php
   /**
    * The template for displaying all pages
    *
    * This is the template that displays all pages by default.
    * Please note that this is the WordPress construct of pages
    * and that other 'pages' on your WordPress site may use a
    * different template.
    *
    * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
    *
    * @package cwt
    */
   
   get_header();
?>
<div class="breadcrumb">
   <div class="container">
      <?php // Get BreadCrumb Component
         get_template_part('template-parts/breadcrumbs');
      ?>
      <?php the_breadcrumb(); ?>
   </div>   
</div>
<div class="single-page-template">   
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="blogpage-title"><?php the_title() ?></h1>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    <?php 
                        $args = array( 'posts_per_page' => '6' );
                        $recent_posts = new WP_Query($args);
                        while( $recent_posts->have_posts() ) :  
                        $recent_posts->the_post()
                    ?>
                        <div class="col-sm-6">
                            <a href="<?php echo get_permalink() ?>">
                                <div class="bloglistpage">
                                        <?php if ( has_post_thumbnail() ) : ?>
                                            <?php the_post_thumbnail() ?>
                                        <?php endif ?> 
                                        <h2><?php the_title() ?></h2>
                                        <p class="publish-date"><span>Publish Date: </span><?php the_date(); ?></p>
                                </div>
                            </a>
                            <div class="post-shortcontent">
                            <?php 
                            the_excerpt();
                            echo '<a href="' . esc_url( get_the_permalink() ) . '"> Read More</a>';
                            ?>
                            </div>
                        </div>
                    <?php endwhile; ?>


                    
                </div>
            </div>
            <div class="col-sm-3">
                <h2 class="categoryname"><span>Recent Blogs</span></h2>
                <?php 
                    $args = array( 'posts_per_page' => '6' );
                    $recent_posts = new WP_Query($args);
                    while( $recent_posts->have_posts() ) :  
                    $recent_posts->the_post()
                ?>
                <a href="<?php echo get_permalink() ?>">
                    <div class="recent-popular-post">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail('thumbnail') ?>
                            <?php endif ?> 
                            <p><?php the_title() ?></p>
                    </div>
                </a>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<?php
    get_footer();
?>