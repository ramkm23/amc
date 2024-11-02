<?php if( get_sub_field( 'image-text-include' ) == 'Yes' ) :?>
<!-- Start Image + Text -->
<section id="image-text-cmp" class="image-text wow fadeInUp">
    <div class="container">
        <div class="row">
            <?php
                if ( get_sub_field( 'image-text-position' ) == 'left' ) {
                
                	$image_postion = 'float-left mr-3';
                
                } else {
                
                	$image_postion = 'float-right ml-3';
                }
            ?>
            <div class="col content">
                <figure class="figure <?php echo $image_postion; ?>">
                    <img src="<?php echo get_sub_field( 'image' )[ 'url' ]; ?>"
                        class="text-images igure-img img-fluid"
                        alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>">
                </figure>
                <h2><?php echo get_sub_field( 'heading' );?></h2>
                <p><?php echo get_sub_field( 'text' );?></p>
                <?php if(get_sub_field('cta-button-link')) : ?>  
                    <a href="<?php echo get_sub_field('cta-button-link')['url']; ?>" target="<?php echo get_sub_field('cta-button-link')['target']; ?>" class="btn"><?php echo get_sub_field('cta-button-link')['title']; ?></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- End Image + Text -->
<?php endif; ?>