<?php if( get_sub_field( 'include-counter-details' ) == 'Yes' ) :?>
<!--==========================
   Services Section
   ============================-->
<section id="counter-details">
   <div class="container">
      <div class="row"> 
         <?php if(have_rows('counter-details-items')):?>
         <?php while(have_rows('counter-details-items')): the_row(); ?>
         <div class="col-lg-3">
            <div class="box wow fadeInLeft">
               <div class="icon">
                  <?php if(!empty(get_sub_field('counter-details-item-icons'))): ?>
                     <?php echo get_sub_field('counter-details-item-icons'); ?>
                  <?php endif; ?>
               </div>
               <?php if(!empty(get_sub_field('counter-details-item-heading'))): ?>
                  <h3 class="title"><?php echo get_sub_field('counter-details-item-heading'); ?></h3>
               <?php endif; ?>
               <?php if(!empty(get_sub_field('counter-details-item-text'))): ?>
                  <p class="description">
                     <?php echo get_sub_field('counter-details-item-text'); ?>
                  </p>
               <?php endif; ?>
            </div>
         </div>
         <?php endwhile; ?>
         <?php endif; ?>    
      </div>
   </div>
</section>
<!-- #services -->
<?php endif; ?>