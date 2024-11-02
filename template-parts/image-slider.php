<?php if( get_sub_field( 'include-image-slider' ) == 'Yes' ) :?>
<section id="image-slider" class="wow fadeInUp" >
    <div class="container">
    <div class="section-header">
        <?php if(get_sub_field('image-slider-heading')) : ?>
            <h2><?php echo get_sub_field('image-slider-heading'); ?></h2>
        <?php endif; ?>
        <?php if(get_sub_field('client-slider-text')) : ?>
            <p><?php echo get_sub_field('client-slider-text'); ?></p>
        <?php endif; ?>
    </div>
    <div class="owl-carousel images-carousel">
        <?php if(have_rows('Images')):?>
            <?php while(have_rows('Images')): the_row(); ?>
                <img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>" class="clientlogo" alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>"> 
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    </div>
</section>
<?php endif;?>