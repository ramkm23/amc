<?php if( get_sub_field( 'include-three-column-components' ) == 'Yes' ) :?>
<!--==========================
   Services Section
   ============================-->
<section class="three-coloumn-components">
   <div class="container">
      <div class="row"> 
         <div class="col-sm-12">
               <div class="comptitle">
                  <h2><?php if(!empty(get_sub_field('three-column-components-heading'))): ?>
                  <span><?php echo get_sub_field('three-column-components-heading'); ?></span>
                  <?php endif; ?>
                  </h2>
                  <p><?php if(!empty(get_sub_field('three-column-components-text'))): ?>
                  <?php echo get_sub_field('three-column-components-text'); ?>
                  <?php endif; ?></p>
               </div>
         </div>
         <?php if(have_rows('three-column-components-items')):?>
         <?php while(have_rows('three-column-components-items')): the_row(); ?>
         <div class="col-lg-4">
            <div class="box wow fadeInLeft">
               <div class="image">
               <img src="<?php echo get_sub_field( 'three-column-components-item-image' )[ 'url' ]; ?>" class="text-images igure-img img-fluid"   alt="<?php echo get_sub_field( 'three-column-components-item-image' )[ 'alt' ]; ?>">         
               </div>
               <?php if(!empty(get_sub_field('three-column-components-item-heading'))): ?>
                  <h3 class="title"><?php echo get_sub_field('three-column-components-item-heading'); ?></h3>
               <?php endif; ?>
               <?php if(!empty(get_sub_field('three-column-components-item-text'))): ?>
                  <p class="description">
                     <?php echo get_sub_field('three-column-components-item-text'); ?>
                  </p>
               <?php endif; ?>
               <?php if(get_sub_field('three-column-components-item-button')) : ?>  
                    <a href="<?php echo get_sub_field('three-column-components-item-button')['url']; ?>" target="<?php echo get_sub_field('three-column-components-item-button')['target']; ?>" class="btn"><?php echo get_sub_field('three-column-components-item-button')['title']; ?></a>
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