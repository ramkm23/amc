<?php if( get_sub_field( 'text-include' ) == 'Yes' ) :?>
    <div class="container">
        <div class="row">
            <div class="colo-sm-12">
                <?php if(!empty(get_sub_field('text'))): ?>
                    <?php echo get_sub_field('text'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div> 
<?php endif; ?>