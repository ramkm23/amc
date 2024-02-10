<?php if( get_sub_field( 'include-services' ) == 'Yes' ) :?>
<!--==========================
   Services Section
   ============================-->
<section id="services">
   <div class="container">
      <div class="row"> 
         <div class="col-sm-12">
               <div class="section-header">
                  <?php if(!empty(get_sub_field('services-heading'))): ?>
                  <h2><?php echo get_sub_field('services-heading'); ?></h2>
                  <?php endif; ?>
                  <?php if(!empty(get_sub_field('services-text'))): ?>
                  <p><?php echo get_sub_field('services-text'); ?></p>
                  <?php endif; ?>
               </div>
         </div>
         <?php if(have_rows('service-items')):?>
         <?php while(have_rows('service-items')): the_row(); ?>
         <div class="col-lg-6">
            <div class="box wow fadeInLeft">
               <div class="icon">
                  <?php if(!empty(get_sub_field('service-item-icons'))): ?>
                     <?php echo get_sub_field('service-item-icons'); ?>
                  <?php endif; ?>
               </div>
               <?php if(!empty(get_sub_field('service-item-heading'))): ?>
                  <h3 class="title"><?php echo get_sub_field('service-item-heading'); ?></h3>
               <?php endif; ?>
               <?php if(!empty(get_sub_field('service-item-text'))): ?>
                  <p class="description">
                     <?php echo get_sub_field('service-item-text'); ?>
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