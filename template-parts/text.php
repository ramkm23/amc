<?php if( get_sub_field( 'text-include' ) == 'Yes' ) :?>
   <section class="text-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(!empty(get_sub_field('text'))): ?>
                        <?php echo get_sub_field('text'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div> 
    </section>
<?php endif; ?>
