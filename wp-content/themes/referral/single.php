<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 


 if ( function_exists('ot_get_option') ) {    

  $blog_hader_image = ot_get_option('blog_hader_image'); 
    $blog_tag_line = ot_get_option('blog_tag_line'); 
 
 
} 



 ?>


<?php // echo do_shortcode('[rev_slider blog]'); ?> 


<div class="full_size">
           <img src="<?php  echo  $blog_hader_image; ?>"  />    
           
             <div class="header_heding">
                       
               <div class="sub_title"> <?php echo $blog_tag_line; ?></div>  
         
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

				<?php get_template_part( 'content', get_post_format() ); ?>

				<nav class="nav-single">
					<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentytwelve' ); ?></h3>
					<span class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'twentytwelve' ) . '</span> %title' ); ?></span>
					<span class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'twentytwelve' ) . '</span>' ); ?></span>
				</nav><!-- .nav-single -->

				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
</div> 
<?php get_footer(); ?>