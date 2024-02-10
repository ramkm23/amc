<?php if( get_sub_field( 'image-text-include' ) == 'Yes' ) :?>
<!-- Start Image + Text -->
<section id="about" class="image-text wow fadeInUp">
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
                        class="figure-img img-fluid"
                        alt="<?php echo get_sub_field( 'image' )[ 'alt' ]; ?>">
                </figure>
                <h2><?php echo get_sub_field( 'heading' );?></h2>
                <h3><?php echo get_sub_field( 'text' );?></h3>
            </div>
        </div>
    </div>
</section>
<!-- End Image + Text -->
<?php endif; ?>