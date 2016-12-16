<?php
/**
 * Template Name: Home Template  
 */

get_header();  ?>
<?php 
if ( function_exists('ot_get_option') ) {    
   $header_phone = ot_get_option('header_phone');
   $request_demo_text  = ot_get_option('request_demo_text'); 
   $request_demo_link = ot_get_option('request_a_demo_link');
   $call_us_text = ot_get_option('call_us_text');
   $dental_medical_referrals_text = ot_get_option('dental_medical_referrals_text');       
    
  
} 
?>
<div class="slider_c">
	<?php 
    echo do_shortcode("[rev_slider home_slider]"); ?>   
   
     <div class="slider_content_bottom"> 
               <div class="more_size">
                    <div class="left_slide"><span> <?php  echo $dental_medical_referrals_text; ?> </span><a href="<?php  echo $request_demo_link;  ?> "><?php  echo $request_demo_text; ?></a>   
                    </div>                     
                 <div class="right_slide"><span> <?php  echo $call_us_text; ?></span><img src="<?php bloginfo( 'template_url' ); ?>/img/phone-1.png"><a target="_blank" href="tel:<?php echo $header_phone; ?>"> <?php  echo $header_phone; ?></a>     
                 </div>
             </div>   
             <div class="clear"></div>    
    </div>         
</div>

<div class="more_size">
<ul class="part3">
    <li><img class="bounce" src="<?php  the_field('top1_Image');?>" /><?php  the_field('top1_text');?> </li>
    <li><img class="bounce" src="<?php  the_field('top2_image');?>" /><?php  the_field('top2_text');?> </li>
    <li class="last_ca"><img class="bounce" src="<?php  the_field('top3_image');?>" /><?php  the_field('top3_text');?></li>
<div class="clear"></div> 
</ul>    

</div> 

<!--
<div class="gray_bg">
  <div class="more_size">
  <div class="left_gray1">
   <h1>Physician Liasion Marketing </h1>
<p> Many practices value the importance of building face-to-face relationships but struggle knowing how to effectively create and manage a physician-liaison 
marketing program that delivers measurable results. Our expertise stems from years of experience hiring, training and managing physician-marketing liaisons for medical and dental specialists with compelling results. </p>
  
  </div>
<!--  <div class="right_gray1"> 
  <img src="<?php  // bloginfo( 'template_url' ); ?>/img/Referral_Diagnostics_111.png"  />
  </div>
  <div class="clear"></div>  
  </div>
</div>   -->

<div class="more_size_2">  
<div class="section_2">
      <div class="left_2">
       <img src="<?php  the_field('second_left');?>"  />
      </div>
      <div class="right_2">
      <?php  the_field('second_right');?>      
      </div>
      <div class="clear"></div>
 </div>   
 <!-- 
  <div class="section_3">
      <div class="left_3">
      <img src="<?php // bloginfo( 'template_url' ); ?>/img/left_3.png"  />
      </div>
      <div class="right_3">
      <h1>What is ReferralDx?</h1>
      <p>ReferralDx is a cloud-based software developed to enable medical, dental, and related specialists to build and protect referral relationships. ReferralDx keeps you in touch with your referring community by reaching out to them strategically and consistently, and quickly places you as the top-of-mind specialist for the 
procedures you offer.</p>
 <a href="http://www.controlf5.in/client-demo/referal/about-us/"> Read More</a> 

      </div>
      <div class="clear"></div> 
  </div>  
  -->
    <div class="section_4">
      <div class="left_4">
       <?php  the_field('third_left');?>              
      </div>
      <div class="right_4">
     <!-- <img src="<?php // bloginfo( 'template_url' ); ?>/img/sec4.png" />  -->
      <img src="<?php  the_field('third_right');?>" />  
     

      </div>
      <div class="clear"></div>   
      
<div class="section_5">      
      <div class="right_5">
         <?php  the_field('fourth_right');?>
      </div>
      <div class="left_5">       
      <img src="<?php  the_field('fourth_left');?>  " />     
      </div>
      <div class="clear"></div>
</div> 
    
  
  
  
</div>  

  
</div>
 

<div class="testi_bg">
    <div class="testi_title"> <?php  the_field('testimonial_title'); ?>  </div>   
    <div class="testi_img"><img src="<?php bloginfo( 'template_url' ); ?>/img/arrow.png" /></div>
    
    <?php echo do_shortcode("[show_testimonials]"); ?> 
    <!-- <div class="testi_img"><img src="<?php // bloginfo( 'template_url' ); ?>/img/above_line.png" /></div>  -->
</div> 

<div class="home_blogs"> 
   <div class="more_size">           
  <div class="blog_title_c"> Our Blog  </div>       
       <?php
        $paged=(get_query_var('paged')) ? get_query_var('paged') : 1; 
        $rer=query_posts('post_type=post&orderby=post_date&order=DESC&posts_per_page=3&paged='.$paged);   
        if(have_posts()) :
        echo '<ul class="part3">';
        while(have_posts()) : the_post(); 
	       ?>
		<li><?php the_post_thumbnail('full'); ?>  
        <h2><?php echo substr(get_the_title(),0,22); ?></h2>
        <p>  <i class="fa fa-clock-o" aria-hidden="true"></i> &nbsp;<?php the_time('M j. Y') ?>   </p>
        <p><?php echo substr(strip_tags($post->post_content), 0, 80);?></p> 
        <p><a href="<?php echo get_permalink(); ?>"> Read More</a></p> 
        <?php 
		if (function_exists(wpb_lastupdated_posts)) : 
		wpb_lastupdated_posts();  
		endif;
		?>
        </li> 
        
        <?php 
		  endwhile; 
	     wp_reset_query();   
    	?>
   
        <div class="clear"></div> 
        </ul> 
                 
            <?php endif; ?>   
                 <p class="all_posts_c">  <a href="<?php echo site_url(); ?>/blog/">View All Posts</a></p>              
    </div> 
 </div>  



<?php get_footer(); ?>