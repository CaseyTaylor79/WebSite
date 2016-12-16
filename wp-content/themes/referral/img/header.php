<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900italic,900,100italic,100' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  <script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
   <div class="more_size">
        <header id="masthead" class="site-header" role="banner">
           <!-- <hgroup>
                <h1 class="site-title"><a href="<?php // echo esc_url( home_url( '/' ) ); ?>" title="<?php // echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <h2 class="site-description"><?php // bloginfo( 'description' ); ?></h2>
            <!-- </hgroup>  -->
			<div class="head_left" >
			    <?php if ( get_header_image() ) : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
				<?php endif; ?>
			
			</div>  
			<div class="head_right">
			   <div class="head_right_left"> 			   
			    <a target="_blank" href="tel:905-838-8886"><i class="fa"><img src="<?php bloginfo( 'template_url' ); ?>/img/phone.png"/> </i> (800) 717-2108</a>  
				</div>
				<div class="head_right_right">  
				<a target="_blank" href="mailto:info@referraldx.com"><i class="fa fa-envelope-o"></i>info@referraldx.com</a>	
				</div>	
				<div class="clear"> </div>	
			</div>  
			<div class="clear"></div>     
    
           
             
        </header><!-- #masthead -->
        </div>
       <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></button>
                <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
               <div class="more_size"> <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?> </div>
            </nav><!-- #site-navigation -->
    
        <div id="main" class="wrapper">