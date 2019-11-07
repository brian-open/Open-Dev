<?php
/**
 * Template Name: Product
 *
 */

get_header(); ?>
<!-- Hero Slider -->	

<?php get_template_part( 'content-parts/standard-head' ); ?>  

<div class="row products">
    <!-- Block One -->
    <div class="max-width pad-content">
        <div class="small-12 medium-7 columns b-1">
            <div class="the-content">
                <?php the_field('block_one_content'); ?>
            </div>        
        </div>
        <div class="clear"></div>
        <div class="voxxify-showcase">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/voxxify_app_screen_one.png" />
        </div>
        <!-- Block One -->
        
        <!-- Block Two -->
        <div class="small-12 medium-7 columns b-2">
            <div class="the-content">
                <?php the_field('block_two_content'); ?>
            </div>        
        </div>
        <div class="clear"></div>
        <div class="experience-table animate-in">
            <!-- EXP SVG Table -->
            <?php get_template_part( 'content-parts/experience-table' ); ?>
            <!-- ./EXP SVG Table Code -->   
        </div>
    <!-- Block Two -->    
        
    </div>
    <!-- ./Close Container -->
    
</div>

<!-- Optimisation Graph -->
<div class="row animate-in bg-gradient products">
    <div class="slide-container">
        <div class="slide-title">
            <h2>Optimistaion</h2>
        </div>
        <div class="slide-content">
            <div class="opt-map">
                <div class="opt-con">
                    <!-- SVG Graph Code -->
                    <?php get_template_part( 'content-parts/optimisation-graph' ); ?>
                    <!-- ./SVG Graph Code -->    
                    <div class="opt-text">
                        <p>Quality of experience</p>
                    </div>   
                </div>
            </div>                    
        </div>
        <div class="clear"></div>                  
    </div>
</div>
<!-- ./Optimisation Graph -->

<!-- Testimonials & Pic -->
<div class="row test-pic">
    <!-- Customer Testimonials -->
    <div class="small-12 medium-12 large-7 columns no-pad" data-match-height="test-img">
        <div class="testimonial-block">
            <div class="swiper-container testimonial-home">
                <div class="swiper-wrapper">
                <?php if(get_field('testimonials')): ?>
                <?php $count_vids = count(get_field('testimonials')); ?>
                    <?php $opt = 0; while(has_sub_field('testimonials')): ?>


                    <?php
                    $post_object = get_sub_field('testimonial');

                    if( $post_object ): 

                        // override $post
                        $post = $post_object;
                        setup_postdata( $post );    
                        ?>                 
                    <div class="swiper-slide">
                        
                        <div class="testimonial-container">
                            <div class="quote-bg"></div>
                            <div class="testimonial">
                                <blockquote>
                                    <?php the_content(); ?>
                                </blockquote>
                                <div class="cite">
                                    <p><?php the_field('cite') ?>, <?php the_field('position') ?></p>
                                    <p><strong><?php the_title(); ?></strong></p>
                                </div>                            
                            </div>
                        </div>
                        
                    </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>                         
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>            
        </div>
    </div>    
    <!-- ./Customer Testimonials -->

    <!-- Corner Pic -->
    
    <?php if( get_field('corner_image') ): ?>
        <?php
            $imageArray = get_field('corner_image');
            $imageAlt = $imageArray['alt'];
            $imageTitle = $imageArray['title'];
            $imageURL = $imageArray['url'];
            $imageThumbURL = $imageArray['sizes']['large']; ?>

      
    <div class="small-12 medium-12 large-5 columns no-pad" data-match-height="test-img">
        <div class="img-container">
            <img class="fill" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt;  ?>" title="<?php echo $imageTitle ?>" />
        </div>
    </div>
    <!-- ./Corner Pic -->
    
    <?php endif; ?>    
    
</div>
<!-- ./Testimonials & Pic -->

<?php get_template_part( 'content-parts/get-in-touch' ); ?>

<?php get_footer(); ?>



