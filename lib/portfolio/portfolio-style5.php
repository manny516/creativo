				 
		<div id="folio-container">
			
			<?php

			$creatividad_mypost = array( 'post_type' => 'portfolio', 'posts_per_page' => 800  );
	    	$creatividad_loop = new WP_Query( $creatividad_mypost );
			?>	

			<div id="Container" class="column da-thumbs style5-thumb">		
				
			   <?php while ( $creatividad_loop->have_posts() ) : $creatividad_loop->the_post();?>
			   
			   <?php $taxonmies_class = creatividad_custom_taxonomies_terms_links(); 
			   		$the_trim =  str_replace(" ", "-", $taxonmies_class)
	
			   ?>

		       	 <article id="post-<?php the_ID(); ?>" class="mix <?php echo esc_attr($the_trim); ?> col-md-4">	

					<a  href="<?php esc_url(the_permalink()); ?>">	

					<figure class=" folio-abda-thumb" >
						  <?php 
							 if ( has_post_thumbnail()) {
							   
							   the_post_thumbnail('creatividad_portfolio-post-wide');
							 }else{
							 	creatividad_firstcall_image();
							 }
							?>
						<div>
						
						</div>

					</figure>


				  </a>

	        </article>
	            
	
	        <?php endwhile; ?>
	        </div>
				
		</div>
		
<div class="clear"></div>