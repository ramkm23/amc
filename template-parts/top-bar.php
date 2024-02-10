<?php if( get_field( 'include-top-bar','option') == 'Yes' ): ?>
<!--==========================
    Top Bar
    ============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="top-bar">
            <?php if( have_rows( 'contact-details', 'option' ) ): ?>
            <div class="contact-info float-left">
                <?php while( have_rows( 'contact-details', 'option' ) ): the_row(); ?>
                <!-- Email Address -->
                <?php if(get_sub_field('email-address')) : ?>
                <i class="fa fa-envelope-o"></i> <a href="mailto:<?php echo get_sub_field('email-address'); ?>"><?php echo get_sub_field('email-address'); ?></a>
                <?php endif; ?>
                <!-- Email Address -->
                <?php if(get_sub_field('phone-number')) : ?>
                <i class="fa fa-phone"></i> <a href="tel:<?php echo get_sub_field('phone-number', 'option'); ?>"><?php echo get_sub_field('phone-number', 'option'); ?></a>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
            <?php if( have_rows( 'social-media', 'option' ) ): ?>
            <div class="social-links float-right">
                <?php while( have_rows( 'social-media', 'option' ) ): the_row(); ?>
                <!-- Facebook -->
                <?php if(get_sub_field('facebook-link')) : ?>
                <a href="<?php echo get_sub_field('facebook-link', 'option'); ?>" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <!-- Twitter -->
                <?php if(get_sub_field('twitter-link')) : ?>
                <a href="<?php echo get_sub_field('twitter-link', 'option'); ?>" class="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>
                <!-- youtube -->
                <?php if(get_sub_field('youtube-link')) : ?>
                <a href="<?php echo get_sub_field('youtube-link', 'option'); ?>" class="youtube" target="_blank"><span class="fab fa-youtube fb-icon flexbox flexbox--center"></span></a>
                <?php endif; ?>
                <!-- Instagram -->
                <?php if(get_sub_field('instagram-link')) : ?>
                <a href="<?php echo get_sub_field('instagram-link', 'option'); ?>" class="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
                <?php endif; ?>
                <!-- Linkedin -->
                <?php if(get_sub_field('linkedin-link')) : ?>
                <a href="<?php echo get_sub_field('linkedin-link', 'option'); ?>" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
                <?php endif; ?>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Start embed content -->
<!-- end embed content -->
<?php endif; ?>