<?php
    /*Template Name: Home Template */
    get_header();
?>
<!-- Get Basic Content Template -->
<?php //get_template_part('template-parts/most-popular-news'); ?>
<div id="content" role="main">
	<?php while ( have_posts() ) : the_post(); ?>     
		<?php // Get Standard Comp	onents
			if( have_rows('basic-content') ):

				while ( have_rows('basic-content') ) : the_row();

					$section_path = 'template-parts/'.get_row_layout();

					get_template_part($section_path);

				endwhile;

			endif;
		?>	
	<?php endwhile; // end of the loop. ?>
	<?php //get_template_part('template-parts/full-width-blogs'); ?>
</div><!-- #content -->
<?php get_footer(); ?>