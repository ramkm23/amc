<?php if( get_sub_field( 'include-column-wise-components' ) == 'Yes' ) :?>
<!--==========================
   Services Section
   ============================-->
<section class="column-wise-components">
   <div class="container">
      <div class="row"> 
         <div class="col-sm-12">
               <div class="comptitle">
                  <?php if(!empty(get_sub_field('column-wise-components-heading'))): ?>
                  <h2><?php echo get_sub_field('column-wise-components-heading'); ?></h2>
                  <?php endif; ?>
                  <?php if(!empty(get_sub_field('column-wise-components-text'))): ?>
                  <p><?php echo get_sub_field('column-wise-components-text'); ?></p>
                  <?php endif; ?>
               </div>
         </div>
         <?php if(have_rows('column-wise-components-items')):?>
         <?php while(have_rows('column-wise-components-items')): the_row(); ?>
         <div class="col-lg-6">
            <div class="box wow fadeInLeft">
               <div class="image">
               <img src="<?php echo get_sub_field( 'service-item-image' )[ 'url' ]; ?>" class="text-images igure-img img-fluid"   alt="<?php echo get_sub_field( 'service-item-image' )[ 'alt' ]; ?>">         
               </div>
               <?php if(!empty(get_sub_field('column-wise-components-item-heading'))): ?>
                  <h3 class="title"><?php echo get_sub_field('column-wise-components-item-heading'); ?></h3>
               <?php endif; ?>
               <?php if(!empty(get_sub_field('column-wise-components item-text'))): ?>
                  <p class="description">
                     <?php echo get_sub_field('column-wise-components item-text'); ?>
                  </p>
               <?php endif; ?>
               <?php if(get_sub_field('column-wise-components-item-button')) : ?>  
                    <a href="<?php echo get_sub_field('column-wise-components-item-button')['url']; ?>" target="<?php echo get_sub_field('column-wise-components-item-button')['target']; ?>" class="btn"><?php echo get_sub_field('column-wise-components-item-button')['title']; ?></a>
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