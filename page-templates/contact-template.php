<?php
/**
 * Template Name: Contact
 *
 */

get_header(); ?>
<!-- Hero Slider -->	

<?php get_template_part( 'content-parts/standard-head' ); ?>  

<div class="row contact">
    <!-- Address -->
    <div class="max-width pad-content b-1">

        <div class="title-container">
            <h2>Contact</h2>
        </div>        
        
        <div class="small-12 medium-4 columns b-1 no-pad">
            <div class="the-content">
                <?php the_field('address'); ?>
            </div>        
        </div>
        <!-- Block One -->
        
        <!-- Block Two -->
        <div class="small-12 medium-7 columns b-2 no-pad">
            <div class="con-details">
                <ul>
                    <li><a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a></li>
                    <li><a href="tel:<?php echo str_replace(' ', '', get_field('phone_number', 'options')); ?>"><?php the_field('phone_number', 'options'); ?></a></li>
                </ul>
            </div>      
        </div>
        <div class="clear"></div>
    </div>
    <!-- ./Close Container -->
    
</div>

<div class="row contact">
    
    <div class="max-width pad-content">
        <div class="title-container">
            <h2>Locate Us</h2>
        </div>
        <div class="small-12 medium-10 columns no-pad">
            <div class="map-embed">
                <?php the_field('map_embed'); ?>
            </div>
        </div>
         <div class="clear"></div>
    </div>
    
</div>


<?php get_template_part( 'content-parts/get-in-touch' ); ?>

<?php get_footer(); ?>



