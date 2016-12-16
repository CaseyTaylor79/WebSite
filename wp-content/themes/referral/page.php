<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
 if ( function_exists('ot_get_option') ) {    
  $about_us = ot_get_option('about_us');
  $faq_tag_line = ot_get_option('faq_tag_line');  
  $software_page_tag_line = ot_get_option('software_page_tag_line');
  $blog_tag_line = ot_get_option('blog_tag_line'); 
  $contact_us_tag_line = ot_get_option('contact_us_tag_line');       
  $consultants_tagline = ot_get_option('contact_us_tag_line');
 
} 
 



?>

<div class="full_size">
<?php if ( ! post_password_required() && ! is_attachment() ) :
			the_post_thumbnail('full');
			endif; ?>
      <div class="header_heding">
          <?php // About Page;
		   if (is_page(12)){  
		   ?>             
           <div class="sub_title"> <?php echo  $about_us; ?></div>      
           <?php  } 
		       // FAQ page
			   if (is_page(18)){  
		   ?>             
           <div class="sub_title"> <?php echo $faq_tag_line; ?></div>  
            
           <?php  } ?> 
          
          <?php   // CONTACT US 
			   if (is_page(22)){  
		   ?>             
           <div class="sub_title"> <?php echo $contact_us_tag_line; ?></div>  
            
           <?php  } ?> 
            <?php   // Software  
			   if (is_page(16)){  
		   ?>             
           <div class="sub_title"> <?php echo $software_page_tag_line; ?></div>  
            
           <?php  } ?>
             <?php   // Consultants Page 
			   if (is_page(278)){   
		   ?>             
           <div class="sub_title"> <?php echo $consultants_tagline; ?></div>  
            
           <?php  } ?>
                   
                   
       </div>    
</div> 
<div class="more_size">
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
			<?php if(function_exists('bcn_display'))
            {
                bcn_display();
            }?>
  </div> 
	<div id="primary" class="site-content">
		<div id="content" role="main">
         

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
				<?php comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>
            </div>
		</div><!-- #content -->
 </div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>