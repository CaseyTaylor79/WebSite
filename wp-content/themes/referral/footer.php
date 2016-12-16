<?php
/** 
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
  
 if ( function_exists('ot_get_option') ) {    
  $footer_copright = ot_get_option('footer_copright'); 
  $facebook_link = ot_get_option('facebook_link');  
  $google_plus_link = ot_get_option('google_plus_link');   
  $twitter_link = ot_get_option('twitter_link');   
  $linked_in = ot_get_option('linked_in'); 
  $social_heading = ot_get_option('social_heading');  
  $header_phone = ot_get_option('header_phone');
  $header_email = ot_get_option('header_email');   
  
}    
?>
	</div><!-- #main .wrapper -->
    
    
    
    
	<div class="footer_custom">
		<div class="more_size">
           <div class="footer_left">
              <div class="footer_heading">Contact Us</div>   
              <div class="footer_left_left"> 
               <a target="_blank" href="tel:<?php echo $header_phone; ?>"> <i class="fa"><img src="<?php bloginfo( 'template_url' ); ?>/img/white_phone_footer_c.png"> </i> <?php echo $header_phone; ?></a>               
                  </div>  
                  <div class="footer_left_right"> 
                <a target="_blank" href="mailto:<?php echo $header_email; ?>"><i class="fa fa-envelope-o"></i><?php echo $header_email; ?></a>  	
                  </div> 
			
            </div>
           <div class="footer_right"> 
           <div class="social_c_h"><?php echo $social_heading; ?></div>  
            <div class="social">
                <a href="<?php echo $facebook_link; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="<?php  echo $twitter_link; ?>" target="_blank"><i class="fa fa-twitter"></i></a>       
                <a class="last" href="<?php echo $google_plus_link; ?>" target="_blank"><i class="fa  fa-google-plus"></i></a>
                <a href="<?php echo $linked_in; ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
           </div> 
         </div>         
 <div class="copy_right_c">  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo $footer_copright;  ?>">  <?php  echo $footer_copright; ?></a> </div>  
         <div class="clear"></div>
		</div><!-- .site-info -->
    </div>    
	
</div> <!-- #page --> 
 
<?php wp_footer(); ?> 


<script type="text/javascript" src="http://arrow.scrolltotop.com/arrow27.js"> </script>
<noscript>Not seeing a <a href="http://www.scrolltotop.com/"> Scroll to Top Button </a> ? Go to our FAQ page for more info.</noscript>


<script> 

jQuery(document).ready()
{
	jQuery("#con_r1").click(function(){
		jQuery(".con_f1").show();	 
		//jQuery("#con_r1").hide(); 
		jQuery("#con_les1").show();	 			 
		});	
	jQuery("#con_les1").click(function(){
		jQuery(".con_f1").hide();
		jQuery("#con_les1").hide();	
		jQuery("#con_r1").show();                  	  
	});
	
	
	jQuery("#con_r2").click(function(){
		jQuery(".con_f2").show();	
		//jQuery("#con_r2").hide(); 
		jQuery("#con_les2").show();	 			 
		});	
	jQuery("#con_les2").click(function(){
		jQuery(".con_f2").hide();
		jQuery("#con_les2").hide();	
		jQuery("#con_r2").show();     	 
	});
	
	jQuery("#con_r3").click(function(){
		jQuery(".con_f3").show();	
	//	jQuery("#con_r3").hide(); 
		jQuery("#con_les3").show();	 			 
		});	
	jQuery("#con_les3").click(function(){
		jQuery(".con_f3").hide();
		jQuery("#con_les3").hide();	
		jQuery("#con_r3").show();     	 
	});
	
	jQuery("#con_r4").click(function(){
		jQuery(".con_f4").show();	
		//jQuery("#con_r4").hide(); 
		jQuery("#con_les4").show();	 			 
		});	
	jQuery("#con_les4").click(function(){
		jQuery(".con_f4").hide();
		jQuery("#con_les4").hide();	
		jQuery("#con_r4").show();     	 
	});
	
	jQuery("#con_r5").click(function(){
		jQuery(".con_f5").show();	
	//	jQuery("#con_r5").hide(); 
		jQuery("#con_les5").show();	 			 
		});	
	jQuery("#con_les5").click(function(){
		jQuery(".con_f5").hide();
		jQuery("#con_les5").hide();	
		jQuery("#con_r5").show();     	 
	});
	
	jQuery("#con_r6").click(function(){
		jQuery(".con_f6").show();	
	//	jQuery("#con_r6").hide(); 
		jQuery("#con_les6").show();	 			 
		});	
	jQuery("#con_les6").click(function(){
		jQuery(".con_f6").hide();
		jQuery("#con_les6").hide();	
		jQuery("#con_r6").show();     	 
	});
	
	jQuery("#con_r7").click(function(){
		jQuery(".con_f7").show();	
		//jQuery("#con_r7").hide(); 
		jQuery("#con_les7").show();	 			 
		});	
	jQuery("#con_les7").click(function(){
		jQuery(".con_f7").hide();
		jQuery("#con_les7").hide();	
		jQuery("#con_r7").show();     	 
	});
	
	jQuery("#con_r8").click(function(){
		jQuery(".con_f8").show();	
		//jQuery("#con_r8").hide(); 
		jQuery("#con_les8").show();	 			 
		});	
	jQuery("#con_les8").click(function(){
		jQuery(".con_f8").hide();
		jQuery("#con_les8").hide();	
		jQuery("#con_r8").show();     	 
	});
	
	
	jQuery("#con_r9").click(function(){
		jQuery(".con_f9").show();	
		//jQuery("#con_r9").hide(); 
		jQuery("#con_les9").show();	 			 
		});	
	jQuery("#con_les9").click(function(){
		jQuery(".con_f9").hide();
		jQuery("#con_les9").hide();	
		jQuery("#con_r9").show();     	 
	});
	
	jQuery("#con_r11").click(function(){
		jQuery(".con_f11").show();	
		//jQuery("#con_r11").hide(); 
		jQuery("#con_les11").show();	 			 
		});	
	jQuery("#con_les11").click(function(){
		jQuery(".con_f11").hide();
		jQuery("#con_les11").hide();  	
		jQuery("#con_r11").show();       	 
	});  
	
}  

</script>  




   
</body>
</html>