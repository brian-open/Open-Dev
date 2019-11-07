<header class="standard cover" style="background-image:url('<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/voxxify_bg.jpg');">
    <div class="row">
        <div class="max-width pad-content">
            <div class="small-12 medium-9 large-10 medium-centered columns intro">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>	
                <?php endwhile; // end of the loop. ?> 
                
                <?php if (is_page( 'Products' ) ): ?>  
                <div class="request">
                    <a href="#" class="link">
                        <button class="read-m">Request a demo</button>
                        <span class="arrow-next"></span>
                    </a>
                </div>
                <?php endif; ?>  
            </div>
        </div>
    </div>
</header>     