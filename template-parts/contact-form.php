<?php if( get_sub_field( 'include-form' ) == 'Yes' ) :?>
<!-- contact form 7 -->
<section id="contact" class="wow fadeInUp parallex-img" style="background-image: url('https://creativewebstech.com/img/back.jpg')">
    <div class="background-ovelay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="form">
                    <?php if(!empty(get_sub_field('form-heading'))): ?>
                        <h2><?php echo get_sub_field('form-heading'); ?></h2>
                    <?php endif; ?>
                    <?php if(!empty(get_sub_field('form-text'))): ?>
                        <p><?php echo get_sub_field('form-text'); ?></p>
                    <?php endif; ?>
                    <?php $image = do_shortcode(get_sub_field('form-shortcode')); ?>
                    <?php echo $image; ?>
                </div>
            </div>   
        </div>
    </div>
</section><!-- #contact -->
<?php endif;?>