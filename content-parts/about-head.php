<header class="standard">
    <div class="row">
        <div class="max-width pad-content">
            <div class="small-12 medium-11 large-10 medium-centered columns intro">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_content(); ?>	
                <?php endwhile; // end of the loop. ?>    
            </div>
            
            <div class="page-links">
                <a class="smooth-scroll" href="#Overview">
                    <button class="lb-border">Overview</button>
                </a>
                <a class="smooth-scroll" href="#Leadership">
                    <button class="lb-border">Leadership</button>
                </a>  
                <a class="smooth-scroll" href="#Expertise">
                    <button class="lb-border">Expertise</button>
                </a>                  
            </div>
           
        </div>
    </div>
</header>