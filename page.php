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
<div class="default-tepmlate">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="entry-title"><?php the_title() ?></h1>
				<!-- Get Default Content Template -->
				<?php //get_template_part('template-parts/most-popular-news'); ?>
				<div id="content" role="main">
						<?php while ( have_posts() ) : the_post(); ?>     
							<?php // Get Standard Comp	onents
								if( have_rows('default-content') ):
									while ( have_rows('default-content') ) : the_row();
										$section_path = 'template-parts/'.get_row_layout();
										get_template_part($section_path);
									endwhile;
								endif; ?>	
					<?php endwhile; // end of the loop. ?>
				</div><!-- #content -->
			</div>
			<div class="col-sm-4">
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
						<p class="entry-title"><?php the_title() ?></p>
						
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