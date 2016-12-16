	<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve 
 * @since Twenty Twelve 1.0 
 */
?>
<script charset="utf-8" type="text/javascript">var switchTo5x=true;</script>
<script charset="utf-8" type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script charset="utf-8" type="text/javascript">stLight.options({"publisher":"wp.c422e82a-2cfc-4610-b9c5-aab58f517e78"});var st_type="wordpress4.5.3";</script>   

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
		<div class="featured-post">
			<?php _e( 'Featured post', 'twentytwelve' ); ?>
		</div>
		<?php endif; ?>
		<header class="entry-header">
        <?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
            
            <?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail(); 
				
			endif; ?>
         						
			<?php endif; // is_single() ?>
            <?php if (!is_single() ) : ?>            
                <a href="<?php echo get_permalink(); ?>">     
     	<?php if ( ! post_password_required() && ! is_attachment() ) :
				the_post_thumbnail(); 
				
			endif; ?> </a> 
            
         <?php   endif; ?>
       

			
		</header><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?> 
		<div class="entry-content">
        
        <div class="blog_content">
            	<?php if ( is_single() ) : ?>
            <span class="time-section"> 
                    <a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>" class="entry-date"> <?php the_time('M j. Y') ?> </a> &nbsp; | &nbsp; Posted By:<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"> <?php the_author(); ?></a>
                  </span> 
         
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentytwelve' ) ); ?> 
             <div class="social_share_c"> 
                 <?php // echo do_shortcode('[Social9_Share]'); ?>  
     <span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
     <span class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
    <span class='st_linkedin_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
    <span class='st_googleplus_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span> 
                 
              </div> 
			
			<?php else : ?>
            
             <div class="time-section"> 
                    <h4><a href="<?php echo get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>" class="entry-date"> <?php the_time('M j. Y') ?> </a> &nbsp; | &nbsp; Posted By:<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"> <?php the_author(); ?></a></h4> 
                  </div>
                <h1 class="entry-title entry-title_blog">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			    </h1>
                <div class="blog-content our_services_content">
                       <?php echo substr(strip_tags($post->post_content), 0, 190);?> 
                        
                 </div> 
                 
               
                 
                 
                 <div class="read-more-blog blog_c_r">
                     <a href="<?php echo get_permalink(); ?>">[ Read More ]</a> 
                 </div>
                 <div class="social_share_c"> 
                 <?php //echo do_shortcode('[Social9_Share]'); ?> 
                  <span class='st_facebook_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
     <span class='st_twitter_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
    <span class='st_linkedin_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
    <span class='st_googleplus_large' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
  <!--  <span class='st_sharethis_large' st_title='<?php  //the_title(); ?>' st_url='<?php // the_permalink(); ?>'></span>  --> 
                 
                 </div> 
                 <div class="clear"></div>
            
               <?php /*?><div class="comments-link">
               <?php echo do_shortcode('[Social9_Share]'); ?>
					<?php comments_popup_link( '<span class="leave-reply ">' . __( 'Comments <i class="fa fa_text fa-comments-o "></i>', 'twentytwelve' ) . '</span>', __( '1 Reply', 'twentytwelve' ), __( '% Replies', 'twentytwelve' ) ); ?> 
				</div><?php */?><!-- .comments-link -->
                
                
                
                
       
				
            
            
            <?php  endif; // is_single() ?>
            
            
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div>
        </div><!-- .entry-content -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php //twentytwelve_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php
						/** This filter is documented in author.php */
						$author_bio_avatar_size = apply_filters( 'twentytwelve_author_bio_avatar_size', 68 );
						echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
						?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( __( 'About %s', 'twentytwelve' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentytwelve' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
