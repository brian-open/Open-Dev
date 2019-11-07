<header class="standard cover" style="background-image:url('<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/voxxify_bg.jpg');">
    <div class="row">
        <div class="max-width pad-content">
            <div class="small-12 medium-9 large-7 medium-centered columns intro">
                <?php the_field('blog_introduction', get_option('page_for_posts' )); ?>
            </div>
            <?php if (is_page( 'About' ) ): ?>
            <div class="page-links">
                <a href="">
                    <button class="lb-border">Overview</button>
                </a>
                <a href="">
                    <button class="lb-border">Leadership</button>
                </a>  
                <a href="">
                    <button class="lb-border">Expertise</button>
                </a>                  
            </div>
            <?php endif; ?>  
        </div>
    </div>
</header>    

