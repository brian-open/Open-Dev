<?php
/**
 * Template Name: About
 *
 */

get_header(); ?>
<!-- Hero Slider -->	


<?php get_template_part( 'content-parts/about-head' ); ?>  

<div class="row bg-grad-hr">
    <!-- About Container -->
    <div class="container ab" id="Overview">
        <div class="sash z-4"></div>
        <!-- Overview -->
        <div class="small-12 medium-7 large-7 columns no-pad z-1">
            <div class="img-container">
                <?php
                    $imageArray = get_field('overview_image');
                    $imageAlt = $imageArray['alt'];
                    $imageTitle = $imageArray['title'];
                    $imageURL = $imageArray['url'];
                    $imageThumbURL = $imageArray['sizes']['large']; ?>

                    <img class="fill" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" Title="<?php echo $imageTitle; ?>">
            </div>
        </div>
        <div class="small-12 medium-5 large-5 columns no-pad z-2">
            <div class="the-content">
                <?php the_field('overview_content'); ?>                
            </div>
        </div>
        <!-- ./Overview -->
        <div class="clear"></div>
        <!-- Leadership & Team -->
        <div class="pad-top">
            <div class="small-12 medium-5 large-5 columns leadership z-3" id="Leadership">
                <div class="the-content">
                    <?php the_field('leadership_content'); ?>    
                </div>
            </div>
            <div class="small-12 medium-7 large-7 columns team-con z-5">
              <div class="the-team">
                <?php if(get_field('leadership_team')): ?>
                <?php $count_vids = count(get_field('leadership_team')); ?>
                    <?php $opt = 0; while(has_sub_field('leadership_team')): ?>


                    <?php
                    $post_object = get_sub_field('team_member');

                    if( $post_object ): 

                        // override $post
                        $post = $post_object;
                        setup_postdata( $post );    
                        ?>
                        <div class="small-12 medium-4 columns team-member no-mob-pad">
                            <div class="avatar">
                            <?php
                                $imageArray = get_field('avatar');
                                $imageAlt = $imageArray['alt'];
                                $imageTitle = $imageArray['title'];
                                $imageURL = $imageArray['url'];
                                $imageThumbURL = $imageArray['sizes']['medium']; ?>

                                <img class="fill" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" Title="<?php echo $imageTitle; ?>">                        
                            </div>
                            <div class="details">
                                <p><strong><?php the_title(); ?></strong></p>
                                <p><?php the_field('position'); ?></p>
                            </div>
                        </div>
                  
                    <?php endif; ?>
            
                    <?php wp_reset_postdata(); ?>
                    <?php endwhile; ?>
                <?php endif; ?>                     
            </div>
            </div>           
        </div>
        <!-- ./Lower Block -->
        <div class="corner"></div>
    </div>
    <!-- ./About Container -->
</div>


<!-- Testimonial & Expertise -->
<div class="row t-e">
    <div class="pad-content">
        <div class="small-12 medium-12 large-7 columns no-pad">
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
        <div class="small-12 medium-12 large-5 columns no-pad expertise" id="Expertise">
            <div class="the-content">
                <?php the_field('expertise_content'); ?>
            </div>
        </div>
    </div>
</div>
<!-- ./Testimonial & Expertise -->

<div class="row logos">
    <div class="max-width pad-content">
    <div class="swiper-container logo-carousel">
        <div class="swiper-wrapper">
            <?php if ( have_rows('logos','options') ) : while ( have_rows('logos','options') ) : the_row(); ?>
                <div class="swiper-slide">
                    <div class="logo-container">
                        <?php if( get_sub_field('company_logo') ): ?>
                            <?php
                                $imageArray = get_sub_field('company_logo');
                                $imageAlt = $imageArray['alt'];
                                $imageTitle = $imageArray['title'];
                                $imageURL = $imageArray['url'];
                                 $imageThumbURL = $imageArray['sizes']['medium']; ?>

                                <img class="logo" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" Title="<?php echo $imageTitle; ?>">
                            <?php endif; ?>   
                        </div>
                </div>
                <?php endwhile; endif; ?>            
        </div>
    </div>    
    </div>
</div>

<?php get_template_part( 'content-parts/get-in-touch' ); ?>

<?php get_footer(); ?>



