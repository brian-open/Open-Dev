<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link rel="stylesheet" href="https://use.typekit.net/aae0xfd.css">

</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>
<div class="row scroll-nav">
    <div class="nav-bar">
        <div class="logo-con">
            <a href="/">
                <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/voxxify_logo.svg" />            
            </a>
        </div>
        <div class="max-width">
            <nav class="h-nav">
                <?php wp_nav_menu( array( 'menu' => 'main') ); ?>
            </nav>        
        </div>
        <div class="menu-items">
            <ul>
                <li class="login"><a class="lock-icon" href=""></a></li>
                <li class="chat"></li>
                
                <li class="modal-menu">
                    <div class="hamburger" id="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>    
</div>

<div class="row head-nav">
    <div class="nav-bar">
        <div class="logo-con">
            <a href="/">
                <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/assets/dist/img/voxxify_logo.svg" />            
            </a>
        </div>
        <div class="menu-items">
            <ul>
                <li class="login"><a class="lock-icon" href=""></a></li>
                <li class="chat"></li>
                
                <li class="modal-menu">
                    <div class="hamburger static" id="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
    
<header class="home-p">
    <div class="home-video">
        <iframe src="https://player.vimeo.com/video/369524274?autoplay=1&amp;loop=1&amp;autopause=0&amp;muted=1&amp;background=1" width="100%" height="auto" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen=""></iframe>
        <div class="overlay">
            <div class="animate-in overlay-container">
                <p>Cutting edge technology that’s shaping the future of employee experiences</p>
                <a href="#" class="link"><button class="read-m">Request a demo</button><span class="arrow-next"></span></a>
            </div>
        </div>
    </div>      
</header>    

    
<div class="row bg-teal no-mob">
    <div class="max-width">
        <nav class="h-nav">
            <?php wp_nav_menu( array( 'menu' => 'home') ); ?>
        </nav>
    </div>
</div>    