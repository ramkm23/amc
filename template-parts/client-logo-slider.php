<?php if( get_sub_field( 'include-client-logo-slider' ) == 'Yes' ) :?>
<section id="clients" class="wow fadeInUp" >
    <div class="container">
    <div class="section-header">
        <?php if(get_sub_field('client-slider-heading')) : ?>
            <h2><?php echo get_sub_field('client-slider-heading'); ?></h2>
        <?php endif; ?>
        <?php if(get_sub_field('client-slider-text')) : ?>
            <p><?php echo get_sub_field('client-slider-text'); ?></p>
        <?php endif; ?>
    </div>
    <div class="owl-carousel clients-carousel">
        <?php if(have_rows('client-logo')):?>
            <?php while(have_rows('client-logo')): the_row(); ?>
                <img src="<?php echo get_sub_field( 'logo-images' )[ 'url' ]; ?>" class="clientlogo" alt="<?php echo get_sub_field( 'logo-images' )[ 'alt' ]; ?>"> 
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
    </div>
</section><!-- #clients -->
<?php endif;?>