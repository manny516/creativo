
	<div class="grid wide-grid ">
		
		<?php
			$creatividad_mypost = array( 'post_type' => 'portfolio', 'posts_per_page' => 800  );
	    	$creatividad_loop = new WP_Query( $creatividad_mypost );
		?>
	
		<div id="Container">		
		   <?php while ( $creatividad_loop->have_posts() ) : $creatividad_loop->the_post();?>
		   
		   <?php $taxonmies_class = creatividad_custom_taxonomies_terms_links(); 
		   		$the_trim =  str_replace(" ", "-", $taxonmies_class)

		   ?>
	  
	       	 <article id="post-<?php the_ID(); ?>" class="mix <?php echo esc_attr($the_trim); ?>">	
       	 
	       	 	<div class=" col-sm-4 folio-thumb">	

	       	 		<figure class="effect-zoe">		 			
		                <?php 
						 if ( has_post_thumbnail()) {
							   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
							   
							   the_post_thumbnail('large');
							   
							   echo '<span> <a href="' . esc_url($large_image_url[0]) . '" title="' . the_title_attribute('echo=0') . '" rel="prettyPhoto" class="folio-btn"><i class=" fa fa-eye"> </i> </a></span>';
							 }else{
							 	creatividad_firstcall_image();
							 }
						 ?>
						 
						 <figcaption>
							<h2><?php the_time('M,d,Y') ?> </h2>
							
							<span class="folio-btn"><i class="fa fa-file-text"> <a href="<?php esc_url(the_permalink()); ?>" class=""> <i class="fa fa-file-text">  </i> </a> </i></span>
							
						</figcaption>	
				
	       	 		</figure>

	 		
	 				<!-- Display Title -->
	 				<span class="clear"></span>
			       	<div class="pull-left">
			        	<h3> <?php esc_html(the_title()); ?> </h3>
					</div>
		       
			     
			  </div>

        </article>
            

        <?php endwhile; ?>
        </div>
			
	</div>
		
	<div class="clear"></div>	