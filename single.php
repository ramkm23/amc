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
         <div class="col-sm-9">
            <h1 class="page-title"><?php the_title() ?></h1>
            <p class="publish-date"><span>Publish Date: </span><?php the_date(); ?></p>
            <div class="post-featureimage">
               <?php
                  if ( has_post_thumbnail() ) :
                     the_post_thumbnail();
                  endif;
               ?>
            </div>
            <!-- Get Default Content Template -->
            <?php //get_template_part('template-parts/most-popular-news'); ?>
            <div class="post-content" role="main">
               <p><?php the_content(); ?></p>
               <?php 
					while ( have_posts() ) :
						the_post();
						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( '<< Previous Blogs', 'cwt' ),
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next Blogs >>', 'cwt' ),
							)
						);
					endwhile; // End of the loop.
					?> 
            </div>
            <!-- #content -->
         </div>
         <div class="col-sm-3">
            <h2 class="categoryname"><span>Recent Blogs</span></h2>
            <?php 
               $args = array( 'posts_per_page' => '6' );
               $recent_posts = new WP_Query($args);
               while( $recent_posts->have_posts() ) :  
               $recent_posts->the_post() ?>
            <a href="<?php echo get_permalink() ?>">
               <div class="recent-popular-post">
                  <?php if ( has_post_thumbnail() ) : ?>
                     <?php the_post_thumbnail('thumbnail') ?>
                  <?php endif ?> 
                  <p><?php the_title() ?></p>
               </div>
            </a>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 
         </div>
      </div>
   </div>
</div>
<?php
   get_footer();
?>