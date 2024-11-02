<?php if( get_field( 'include-footer','option') == 'Yes' ): ?>
<div class="footer-section">  
    <div class="container clearfix">
        <div class="row">
            <div class="col-sm-4">
                <?php if( have_rows( 'about-us', 'option' ) ): ?>
                    <div class="about-us-info footcont">
                        <?php while( have_rows( 'about-us', 'option' ) ): the_row(); ?>
                            <!-- About Heading -->
                            <?php if(get_sub_field('footer-about-heading')) : ?>
                            <h2><?php echo get_sub_field('footer-about-heading'); ?></h2>
                            <?php endif; ?>
                            <?php if(get_sub_field('footer-about-text')) : ?>
                            <p><?php echo get_sub_field('footer-about-text'); ?></p>
                            <?php endif; ?>
                            <?php if( get_sub_field( 'footer-about-button' ) ):$link = get_sub_field( 'footer-about-button' ); if( $link ):$link_target = $link['target'] ? $link['target'] : '_self';?> <a href="<?php echo get_sub_field( 'footer-about-button' )[ 'url' ]; ?>" target="<?php echo $link_target; ?>" class="btn btn-primary"><?php echo get_sub_field( 'footer-about-button' )[ 'title' ]; ?></a> <?php endif; ?>
                            <?php endif; ?>
                            <!-- Email Address -->
                        <?php endwhile; ?>
                    </div>    
                <?php endif; ?>
            </div>
            <div class="col-sm-4">
                <?php if( have_rows( 'footer-page-link', 'option' ) ): ?>
                    <div class="about-us-info">
                        <?php while( have_rows( 'footer-page-link', 'option' ) ): the_row(); ?>
                            <!-- About Heading -->
                            <?php if(get_sub_field('footer-page-link-heading')) : ?>
                            <h2><?php echo get_sub_field('footer-page-link-heading'); ?></h2>
                            <?php endif; ?>
                            <!-- Email Address -->
                            <ul>
                                <?php if(have_rows('page-link')):?>
                                    <?php while(have_rows('page-link')): the_row(); ?>
                                        <li>
                                            <?php if( get_sub_field( 'footer-page-link' ) ):
                                                $link = get_sub_field( 'footer-page-link' );
                                                if( $link ):$link_target = $link['target'] ? $link['target'] : '_self';?> <a href="<?php echo get_sub_field( 'footer-page-link' )[ 'url' ]; ?>" target="<?php echo $link_target; ?>"><?php echo get_sub_field( 'footer-page-link' )[ 'title' ]; ?></a>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </li>    
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </ul>    
                            
                        <?php endwhile; ?>
                    </div>    
                <?php endif; ?>
                
            </div>
            <div class="col-sm-4 footcont">
                <?php if( have_rows( 'footer-contact-us', 'option' ) ): ?>
                    <div class="about-us-info">
                        <?php while( have_rows( 'footer-contact-us', 'option' ) ): the_row(); ?>
                            <!-- About Heading -->
                            <?php if(get_sub_field('footer-contact-heading')) : ?>
                            <h2><?php echo get_sub_field('footer-contact-heading'); ?></h2>
                            <?php endif; ?>
                            <?php if(get_sub_field('footer-contact-us-address')) : ?>
                            <p><i class="ion-ios-location-outline"></i> <?php echo get_sub_field('footer-contact-us-address'); ?></p>
                            <?php endif; ?>
                            <?php if(get_sub_field('footer-contact-phone-number')) : ?>
                            <p><i class="ion-ios-telephone-outline"></i> <a href="tel:<?php echo get_sub_field('footer-contact-phone-number'); ?>"><?php echo get_sub_field('footer-contact-phone-number'); ?></a></p>
                            <?php endif; ?>
                            <?php if(get_sub_field('footer-contact-email')) : ?>
                            <p><i class="ion-ios-email-outline"></i> <a href="mailto:<?php echo get_sub_field('footer-contact-email'); ?>"><?php echo get_sub_field('footer-contact-email'); ?></a></p>
                            <?php endif; ?>
                            <!-- Email Address -->
                        <?php endwhile; ?>
                    </div>    
                <?php endif; ?>
            
            </div>
        </div>
    </div>
</div>
<?php endif; ?>


















