<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>



<footer>
    <div class="row bg-navy">
        <div class="max-width pad-content">
            <div class="small-12 medium-4 large-6 columns no-mob-pad">
                <div class="logo-con">
                    <a href="/">
                        <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/voxxify_logo.svg" />            
                    </a>
                </div>
            </div>
            <div class="small-12 medium-8 large-6 columns no-mob-pad">
                <div class="small-6 medium-3 large-3 columns no-mob-pad">
                    <nav class="f-nav">
                        <?php wp_nav_menu( array( 'menu' => ' nav-column-1') ); ?>
                    </nav>                
                </div>
                <div class="small-6 medium-4 large-4 columns no-mob-pad">
                    <nav class="f-nav">
                        <?php wp_nav_menu( array( 'menu' => ' nav-column-2') ); ?>
                    </nav>                   
                </div>
                <div class="small-6 medium-3 large-3 columns no-mob-pad">
                    <nav class="f-nav">
                       <div class="con-details">
                            <ul>
                                <li><a href="mailto:<?php the_field('email', 'options'); ?>"><?php the_field('email', 'options'); ?></a></li>
                                <li><a href="tel:<?php echo str_replace(' ', '', get_field('phone_number', 'options')); ?>"><?php the_field('phone_number', 'options'); ?></a></li>
                                <li><a href="<?php the_field('map_link', 'options'); ?>">Locate Us</a></li>
                           </ul>
                        </div>
                    </nav>                
                </div>
                <div class="small-6 medium-2 large-2 columns no-mob-pad">
                    <nav class="f-nav social">
                        <?php wp_nav_menu( array( 'menu' => 'social') ); ?>
                    </nav>                    
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="full-menu">
    <div class="modal-menu-container">
        <div class="max-width">
          <div class="small-12 medium-6 columns">
            <nav>
                <?php wp_nav_menu( array( 'menu' => ' nav-column-1') ); ?>  
            </nav>
        </div>  
          <div class="small-12 medium-6 columns">
            <nav>
                <?php wp_nav_menu( array( 'menu' => ' nav-column-2') ); ?>  
            </nav>
        </div>      
        </div>
    </div>
</div>

<script
  src="https://code.jquery.com/jquery-3.1.0.js"
  integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk="
  crossorigin="anonymous">
</script>

<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>


</body>
</html>
