<?php if( get_sub_field( 'include-full-width-blogs' ) == 'Yes' ) :?>
    <section class="blogsection ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <?php if(!empty(get_sub_field('full-width-blogs-heading'))): ?>
                        <h2><?php echo get_sub_field('full-width-blogs-heading'); ?></h2>
                    <?php endif; ?>
                    <?php if(!empty(get_sub_field('full-width-blogs-text'))): ?>
                        <p><?php echo get_sub_field('full-width-blogs-text'); ?></p>
                    <?php endif; ?>
                </div>
                <?php 
                    $args = array( 'posts_per_page' => '6' );
                    $recent_posts = new WP_Query($args);
                    while( $recent_posts->have_posts() ) :  
                    $recent_posts->the_post()   
                ?>
                    <div class="col-sm-4">
                        <a href="<?php echo get_permalink() ?>">
                            <div class="bloglistpage">
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <?php the_post_thumbnail() ?>
                                    <?php endif ?> 
                                    <h2><?php the_title() ?></h2>
                                    <p class="publish-date"><span>Publish Date: </span><?php the_date(); ?></p>
                            </div>
                        </a>
                        <div class="post-shortcontent">
                        <?php 
                        the_excerpt();
                        echo '<a href="' . esc_url( get_the_permalink() ) . '"> Read More</a>';
                        ?>
                        </div>
                    </div>
                <?php endwhile; ?>   
            </div>
        </div>
    </section>
<?php endif;?>