
<div class="fade-intro">

		<?php
		//Protect against arbitrary paged values
		$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;
		$cat_name =  get_cat_ID($category_name);
		$args = array(
			'posts_per_page' => 5,
			'cat' => $cat_name,
			'paged' => $paged,
		);

		$the_query = new WP_Query( $args );
		?>
		<!-- the loop etc.. -->
		<div <?php post_class() ?>>
			
			<?php if ( $the_query->have_posts() ) : ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="theme-post no-border style3">
					
				<div class="post-value">
										 
				 	<?php
				 
				 	 if (has_post_format('gallery')) {
					?>
					   <div class="flexslider"> 

					   	<nav>
							<a class="prev flex-navy fa fa-angle-left" href="#">  </a>
						   	<a class="next flex-navy fa fa-angle-right" href="#">   </a>
						</nav>
					   	<ul class="slides">
					 		<?php 
		
						    if ( get_post_gallery() ){
				            $gallery = get_post_gallery( get_the_ID(), false );
				            
				            /* Loop through all the image and output them one by one */
				            foreach( $gallery['src'] AS $src )
					            {
					            	
					                ?>
						               <li ><a href="<?php echo esc_url($src); ?>" rel="prettyPhoto"><img src="<?php  echo esc_url($src); ?>" alt="<?php echo esc_attr('gallery image'); ?>"/></a></li>
					                
					               <?php
					            }			 
						
					        }else if ( has_post_thumbnail()) {
						        the_post_thumbnail('creatividad_blog-size');
						   }
							 ?>
						 </ul> </div>
					 <?php   
							   
							} else if (has_post_format('audio')) {
							 
							 echo creatividad_attachment_filter();

							}else if (has_post_format('video')) {
								?>
								<div class="video-value">
									<?php echo creatividad_attachment_filter();	?>
								</div>

								<?php
																			
							}else{
					?>			
							<?php
								$the_thumb =  the_post_thumbnail('creatividad_blog-size');	
								if(!empty($the_thumb)){
								?>
							   <div class="post-image thumb-container">
							   <a href="<?php esc_url(the_permalink());  ?>">
					 		
					 		<?php
					 		 if ( has_post_thumbnail()) {
					 		
							   the_post_thumbnail('creatividad_blog-size');
							
							 }else{	
							 	creatividad_firstcall_image();
							 }									 		
					 		?>
					 <?php
					 	}
						}
				 	?>
				 
				 </div>
					
					<div class="content-container style-third">
						<div class="time-author">
							<?php $sticky_post = esc_html__( 'Sticky Post', 'creatividad' );  ?>
							<?php if(is_sticky()){ echo "<span class='theme-post-tag  center-sticky-post'> <i class='fa fa-thumb-tack'> </i> {$sticky_post} </span>";} ?>
							<span class="theme-post-tag"><?php the_time(' F j, Y') ?>  / By: <?php echo esc_html(get_the_author()); ?></span>
						</div>

						<div class="post-title">
							<h2 class="post-title" id="post-<?php the_ID(); ?>"><a href="<?php esc_url(the_permalink()); ?>">

								<?php
									$title_check = esc_html(get_the_title());
									if(strlen($title_check) == 0){
										echo get_the_date();
									}else{
										esc_html(the_title());
									}
								?>

							</a></h2>
						</div>
						
						<span class="theme-post-tag theme-cat"><?php esc_html(the_category(', ')) ?></span>

						<div class="clear"></div>
						 

						<div class="entry post-excerpt">
							<p> 
								<?php 
									echo esc_html(creatividad_custom_excerpt());
								?>
							</p>
							
							<a class="read-more-post" href="<?php esc_url(the_permalink()); ?>"> <?php esc_html_e('Read More','creatividad'); ?> </a>
		
						</div>

					</div>
						
				</div>
				
				
			<?php endwhile; ?><!-- end of the loop -->			
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>	
		</div>
				
	<div class="pag">
		<?php creatividad_pagination($the_query); ?>						
	</div>					
				
</div>		
				