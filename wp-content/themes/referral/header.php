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
 
 if ( function_exists('ot_get_option') ) {    
  $header_phone = ot_get_option('header_phone');
  $header_email = ot_get_option('header_email');
 
} 
 
 
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
 <link rel="stylesheet" href="http://s.mlcdn.co/animate.css">
 <script>
    
$(window).scroll(function() {
    if ($(this).scrollTop() > 120){  
        $('.stykiheader').addClass("sticky animated fadeInDown");
    }
    else if($(this).scrollTop() > 0){
        $('.stykiheader').removeClass("sticky animated fadeInDown");
    }
});
</script>
   <style>
   .sticky{
	    position:static; 
		background-color: #fff;
		z-index: 999;
		margin: 0;
		padding: 0;
		width: 100%;
	    border-bottom: 1px solid #ccc;
	   }
	   
	   
	   
	   
   </style>
   <style>

.con_f1 {
    display: none;
	color: #565656 !important;
}
#con_les1{
	display:none;
} 
.con_f2 {
    display: none;
	color: #565656 !important;
}
#con_les2{
	display:none;
} 
.con_f3 {
    display: none;
	color: #565656 !important;
}
#con_les3{
	display:none;
} 
.con_f4 {
    display: none;
	color: #565656 !important;
}
#con_les4{
	display:none;
}
.con_f5 {
    display: none;
	color: #565656 !important;
}
#con_les5{
	display:none;
}  
.con_f6 {
    display: none;
	color: #565656 !important;
}
#con_les6{
	display:none;
} 
.con_f7 {
    display: none;
	color: #565656 !important;
}
#con_les7{
	display:none;
} 
.con_f8 {
    display: none;
	color: #565656 !important;
}
#con_les8{
	display:none;
} 
.con_f9 {
    display: none;
	color: #565656 !important;
}
#con_les9{
	display:none;
} 
.con_f11 {
    display: none;
	color: #565656 !important; 
}
#con_les11{
	display:none;
} 

.page-id-16 span {
    cursor: pointer;
    color: #636363;
} 
.page-id-16 span {
    cursor: pointer;
    color: #21759C;
} 


</style> 

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
  <script>
    
$(window).scroll(function() {
    if ($(this).scrollTop() > 220){  
        $('.new-nav').addClass("sticky animated fadeInDown");
    }
    else{
        $('.new-nav').removeClass("sticky animated fadeInDown");
    }
});
</script>
<style>
.new-nav{
	position:absolute;
	top:-100px;
	opacity:0;
}

.sticky{
	position: fixed;
    background-color: #fff;
    z-index: 999;
    margin: 0;
    padding: 0;
    width: 100%;
	border-bottom: 1px solid #ccc;
	top:0;
	opacity:1;
}
.new-nav2 {
    display: none;
}
.sticky .new-nav2 {
    display: block;
    margin-top: 0;
}	

#responsive-menu {
    position: fixed !important; 
    width: 75%;
    left: -75%;
    top: 0px;
    background: #074f92;
    z-index: 9999;
    box-shadow: 0px 1px 8px #333333;
    font-size: 13px !important;
    max-width: 999px;
    display: none;
}   
	   
 </style> 



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
 <?php echo do_shortcode('[responsive-menu]'); ?>   
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
			    <a target="_blank" href="tel:<?php echo $header_phone; ?>"><i class="fa"><img src="<?php bloginfo( 'template_url' ); ?>/img/phone.png"/> </i>  <?php echo $header_phone; ?></a>  
				</div>
				<div class="head_right_right">  
				<a target="_blank" href="mailto:<?php echo $header_email; ?>"><i class="fa fa-envelope-o"></i><?php echo $header_email; ?></a>	
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
           
  <div class="stykiheader">
   <nav id="site-navigation" class="main-navigation new-nav2" role="navigation ">   
      <div class="more_size"> <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?> </div>
      </nav><!-- #site-navigation --> 
   </div>
   
        <div id="main" class="wrapper">