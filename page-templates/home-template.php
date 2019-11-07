<?php
/**
 * Template Name: Home
 *
 */

get_header('home'); ?>
<!-- Hero Slider -->	

<div class="row">
    <div class="max-width pad-content">
        <div class="small-12 medium-9 medium-centered columns">
            <div class="the-content intro animate-in">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>	
                <?php endwhile; // end of the loop. ?>            
            </div>
        </div>
        <div class="clear"></div>
        <div class="small-12 medium-11 medium-centered columns">
            <div class="icon-block">
                <?php if( have_rows('home_icons') ): ?>
                     <?php $hIcon= 0; while ( have_rows('home_icons') ) : the_row(); ?>
                        <div class="small-12 medium-4 columns">
                            <div class="icon-group">
                                <div class="icon-container">
                                    <?php if( get_sub_field('icon') ): ?>
                                        <?php
                                            $imageArray = get_sub_field('icon');
                                            $imageAlt = $imageArray['alt'];
                                            $imageTitle = $imageArray['title'];
                                            $imageURL = $imageArray['url'];
                                            $imageThumbURL = $imageArray['sizes']['large']; ?>

                                        <img class="icon animate-in i-<?php echo $hIcon; ?>" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" Title="<?php echo $imageTitle; ?>">

                                    <?php endif; ?>
                                    <div class="icon-details">
                                        <h3 class="animate-in i-<?php echo $hIcon; ?>"><?php the_sub_field('icon_title'); ?></h3>
                                        <p class="animate-in i-<?php echo $hIcon; ?>"><?php the_sub_field('description'); ?></p>
                                    </div>
                                </div>    
                            </div>                
                        </div>
                      <?php $hIcon++; endwhile; ?>
                <?php endif; ?>                
            </div>
        </div>
    </div>
</div>

<div class="row bg-gradient">
    <div class="swiper-container voxxify">
        <div class="swiper-wrapper">
            
            <!-- Global Reach -->
            <div class="swiper-slide">
                <div class="slide-container">
                    <div class="slide-title">
                        <h2><?php the_field('global_title'); ?></h2>
                    </div>
                    <div class="slide-content">
                        <div class="global-map">
                            <div class="gl-map-con">
                            <!-- SVG Map Code -->
                            <?php get_template_part( 'content-parts/global-map' ); ?>
                            <!-- ./SVG Map Code -->    
                            <div class="map-text">
                                 <p><?php the_field('global_text'); ?></p>  
                            </div>  
                            </div>
                        </div>                    
                    </div>
                    <div class="clear"></div>
                    <div class="pg-next">
                        <a href="<?php the_field('global_link') ?>" class="link">
                            <button class="read-m">Read more</button><span class="arrow-next"></span>
                        </a>
                    </div>                       
                </div>
             
            </div>
            <!-- ./Global Reach -->
            
            <!-- Work Force Personas -->
            <div class="swiper-slide">
                <div class="slide-container">
                    <div class="slide-title">
                        <h2><?php the_field('workforce_persona_title'); ?></h2>
                    </div>
                    <div class="slide-content">
                        <div class="persona-container">
                            <div class="persona-group">
                            <?php if( have_rows('personas') ): ?>
                                 <?php $persona = 0; while ( have_rows('personas') ) : the_row(); ?>                            
                                <div class="small-12 medium-4 columns persona p-<?php echo $persona; ?> time-animation">
                                    <div class="p-block">
                                        <div class="avatar-con">
                                        <?php
                                            $imageArray = get_sub_field('avatar');
                                            $imageAlt = $imageArray['alt'];
                                            $imageTitle = $imageArray['title'];
                                            $imageURL = $imageArray['url'];
                                            $imageThumbURL = $imageArray['sizes']['medium']; ?>

                                        <img class="avatar" src="<?php echo $imageThumbURL;?>" alt="<?php echo $imageAlt; ?>" Title="<?php echo $imageTitle; ?>">
                                        </div>
                                        <div class="p-details time-animation">
                                            <h4><?php the_sub_field('name') ?> | <?php the_sub_field('position'); ?></h4>
                                            <p><?php the_sub_field('persona_description'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                  <?php $persona++; endwhile; ?>
                            <?php endif; ?>                                   
                            </div>
                        </div>                    
                    </div>
                    <div class="clear"></div>
                    <div class="pg-next">
                        <a href="<?php the_field('personas_link') ?>" class="link">
                            <button class="read-m">Read more</button><span class="arrow-next"></span>
                        </a>
                    </div>                     
                </div>             
            </div>
            <!--./ WorkForce Personas -->
            
            <!-- Optimisation -->
            <div class="swiper-slide">
                <div class="slide-container">
                    <div class="slide-title">
                        <h2><?php the_field('optimisation_title'); ?></h2>
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
                    <div class="pg-next">
                        <a href="<?php the_field('optimisation_link') ?>" class="link">
                            <button class="read-m">Read more</button><span class="arrow-next"></span>
                        </a>
                    </div>                    
                </div>
            </div>            
            <!-- ./Optimisation -->
            
        </div>
        
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>        
        
    </div>
</div>

<div class="row" id="News">
    <div class="max-width pad-content">
        <div class="title-container animate-in">
            <h2>Latest Insights</h2>
        </div>
            <?php
                  query_posts( array(
                      'post_type' => 'post',
                       'posts_per_page' => '3') );
                  if ( have_posts() ) : while ( have_posts() ) : the_post();
                ?>
                <a class="story" href="<?php the_permalink(); ?>">
                    <div class="small-12 medium-4 columns animate-in news-post">
                        <article class="trans">
                            <div class="feature-img">
                                <?php if ( has_post_thumbnail() ) {
                                            the_post_thumbnail('news-thumb');
                                            } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/voxxify/voxxify-default.jpg" alt="<?php the_title(); ?>" />
                                <?php } ?>

                            </div>
                            <div class="post-details">
                                <h4 data-match-height="item-title"><?php echo wp_trim_words( get_the_title(), 6 ); ?></h4>

                                <div class="the-content">

                                        <p data-match-height="item-para"><?php echo $excerpt = wp_trim_words( get_the_excerpt(), $num_words = 22, $more = '...' ); ?></p>

                                </div>

                               <button class="read-news">Read More</button>
                             
                            </div>
                        </article>
                    </div>
                </a>
                <?php endwhile; ?>
            <?php endif; ?>

            <?php wp_reset_query(); ?>    
    </div>
    <div class="show-more animate-in">
        <a href="#">
            <button class="read-news">View More News</button>
            <span class="plus"></span>
        </a>
    </div>
</div>

<div class="row" id="testimonial">
    <div class="max-width pad-content animate-in">    
        <div class="testimonial-container">
            <div class="swiper-container testimonial-home">
                <div class="swiper-wrapper">
                    <?php
                      query_posts( array(
                          'post_type' => 'testimonials',
                           'orderby' => 'rand',
                           'posts_per_page' => '4') );
                      if ( have_posts() ) : while ( have_posts() ) : the_post();
                       $client_post_id = get_the_ID();
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
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php wp_reset_query(); ?>                        
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part( 'content-parts/signup' ); ?>




<?php get_footer(); ?>

