<?php if( get_sub_field( 'text-list-include' ) == 'Yes' ) :?>
<!-- Start Image + Text -->
<section id="about" class="image-link wow fadeInUp">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php if(!empty(get_sub_field('text-list-title'))): ?>
                    <h2 class="titleheading"><?php echo get_sub_field('text-list-title'); ?></h2>
                <?php endif; ?>
            </div>
                    
            <div class="col-sm-9">
                <?php if(!empty(get_sub_field('heading'))): ?>
                    <h3><?php echo get_sub_field('heading'); ?></h3>
                <?php endif; ?>

                <?php if(!empty(get_sub_field('text'))): ?>
                    <p><?php echo get_sub_field('text'); ?></p>
                <?php endif; ?>
            </div>
            <div class="col-sm-3">               
                <?php if(!empty(get_sub_field('list-heading'))): ?>
                    <h3> <?php echo get_sub_field('list-heading'); ?></h3>
                <?php endif; ?> 
                
                <?php if(!empty(get_sub_field('list-text'))): ?>
                    <p><?php echo get_sub_field('list-text'); ?> </p> 
                <?php endif; ?>
                  
            </div>
        </div>
    </div>
</section>
<!-- End Image + Text -->
<?php endif; ?>