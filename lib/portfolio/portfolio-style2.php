				 
		<div id="folio-container">
			
			<?php

			$creatividad_mypost = array( 'post_type' => 'portfolio', 'posts_per_page' => 800  );
	    	$creatividad_loop = new WP_Query( $creatividad_mypost );
			?>	

			<div id="Container" class="column">		
			   <?php while ( $creatividad_loop->have_posts() ) : $creatividad_loop->the_post();?>
			   
			   <?php $taxonmies_class = creatividad_custom_taxonomies_terms_links(); 
			   		$the_trim =  str_replace(" ", "-", $taxonmies_class)
	
			   ?>

		       	 <article id="post-<?php the_ID(); ?>" class="mix <?php echo esc_attr($the_trim); ?> col-md-4">	
	       	 
		       	 	<div class=" folio-abda-thumb ">	

		       	 		<ul class=" folio-grid cs-style-3">
							<li>
								<figure >
									  <?php 
										 if ( has_post_thumbnail()) {
										   the_post_thumbnail('large');
										   
										 }else{
										 	creatividad_firstcall_image();
										 }
										?>
									<figcaption>
										<h3> <?php esc_html(the_title()); ?> </h3>
										<span class="portfolio-time-stamp"> <?php the_time('M,d,Y') ?> </span>
										<a href="<?php esc_url(the_permalink()); ?>"><span class="fa fa-search-plus"></span></a>
									</figcaption>

								</figure>
							</li>

						</ul>
	
				  </div>

	        </article>
	            
	
	        <?php endwhile; ?>
	        </div>
				
		</div>
		
<div class="clear"></div>