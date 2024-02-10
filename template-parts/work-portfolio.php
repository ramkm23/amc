<!--========================== Our Portfolio Section ============================-->
<?php if( get_sub_field( 'include-work-portfolio' ) == 'Yes' ) :?>
<section id="portfolio" class="wow fadeInUp">
    <div class="container">
        <div class="section-header" id="porject">
        <?php if(get_sub_field('work-portfolio-heading')) : ?>
                <h2><?php echo get_sub_field('work-portfolio-heading'); ?></h2>
            <?php endif; ?>
            <?php if(get_sub_field('work-portfolio-text')) : ?>
                <p><?php echo get_sub_field('work-portfolio-text'); ?></p>
            <?php endif; ?>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <?php if(have_rows('work-portfolio-image')):?>
                <?php while(have_rows('work-portfolio-image')): the_row(); ?>
                <div class="col-lg-3 col-md-4">
                    <div class="portfolio-item wow fadeInUp">     
                    <a href="<?php echo get_sub_field( 'work-portfolio-full-image' )[ 'url' ]; ?>" class="portfolio-popup">  
                    <img src="<?php echo get_sub_field( 'work-portfolio-thumbnail' )[ 'url' ]; ?>" class="clientlogo" alt="<?php echo get_sub_field( 'work-portfolio-thumbnail' )[ 'alt' ]; ?>">
                        <div class="portfolio-overlay">
                        <div class="portfolio-info"><h2 class="wow fadeInUp"><i class="fa fa-eye"></i></h2></div>
                        </div>
                    </a>
                    </div>
                </div>     
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif;?>
<!-- #portfolio -->
