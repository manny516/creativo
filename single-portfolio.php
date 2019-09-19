<?php get_header(); ?>

<?php
		$url = get_children('post_parent='.get_the_ID().'&post_type=attachment&post_mime_type=image');;
		$title = get_the_title();
		str_replace(" ", "+", $title); 

		

 		$header_banner = $sub_header_mb->the_meta();

 		if(is_array($header_banner)){
		
		foreach( $header_banner as $header_option=>$the_option ){
 
 	 		$src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
 	 		$option =  $the_option[0];

 	 	}

 	 }

 	 	if( empty($creativo_twitter)){
			$creativo_twitter = "";
		}

		 if( !empty($src) && isset($option) == "yes"){
			 $echo_results = esc_url($src[0]);
			 $feature_bg = "background:url('{$echo_results}') no-repeat ";
			 
			 ?>

			<div id="folio-full-image" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_attr($echo_results); ?> "  >  
				<div id="inner-content" class="container"> 

					<?php  if(function_exists('creatividad_js')){ $title_center = "h1-center"; ?>
						<div class="col-sm-4 rico-social banner-grid"> 
							<nav id="full-share-this">
								<a id="facebook-share" href="javascript: void(0)" > <span class="btn fa fa-facebook"> </span> </a>
								<a id="twitter-share" href="javascript: void(0)"data-handler="<?php echo esc_attr($creativo_twitter); ?>" > <span class="btn fa fa-twitter"> </span> </a>
								<a id="google-share" href="javascript: void(0)"> <span class="btn fa fa-google-plus"> </span> </a>
								<a id="pintetrest-share" href="javascript: void(0)" > <span class="btn fa fa-pinterest-p"> </span> </a>
								
							</nav>
						</div>
					<?php }?>
					<div class="col-sm-5 banner-grid <?php echo esc_attr($title_center) ?>"> <h1> <?php echo esc_html(get_the_title()); ?></h1> </div>
					<?php if(function_exists('creatividad_js')){ ?>
					<div class="col-sm-3 hidden-xs banner-grid pull-right row "> <?php echo creatividad_theme_next_prev();  ?> </div>
					<?php } ?>

				</div>

			</div>
			 
		<?php
		
		 }else{
		 ?>
			<div id="folio-el-rico" >
				<div class="container">
					<?php  if(function_exists('creatividad_js')){ $title_center = "h1-center"; ?>

					<div class="col-sm-4 rico-social banner-grid">  

						
						<nav id="full-share-this">
							<a id="facebook-share" href="javascript: void(0)"> <span class="btn fa fa-facebook"> </span> </a>
							<a id="twitter-share" href="javascript: void(0)" data-handler="<?php echo esc_attr($creativo_twitter); ?>" > <span class="btn fa fa-twitter"> </span> </a>
							<a id="google-share" href="javascript: void(0)"> <span class="btn fa fa-google-plus"> </span> </a>
							<a id="pintetrest-share" href="javascript: void(0)" > <span class="btn fa fa-pinterest-p"> </span> </a>
							
						</nav>
						
					</div>
					<?php }?>
					<div class="col-sm-5 banner-grid <?php echo esc_attr($title_center); ?>"> <h1> <?php echo esc_html(get_the_title()); ?></h1> </div>
					<?php if(function_exists('creatividad_js')){  ?>
					<div class="col-sm-3 hidden-xs banner-grid pull-right row"> <?php echo creatividad_theme_next_prev();  ?></div>
					<?php } ?>
				</div>
			</div>  
			<?php } ?>
			

		<div id="folio-single" class="container">
			<div class="folio-inner-content">

				<div class="col-sm-12">						
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						
							<div class="entry">
								
								<?php the_content(); ?>

								<?php if( comments_open() ) { ?>	
									<button id="comment-trigger" class="col-sm-8 col-sm-offset-2 show-comments-bar btn" data-toggle="collapse" data-target="#comment-results"> <span class="inner-text"> <?php esc_html_e('Show Comments','creatividad'); ?> </span>  <span class="inner-text" id="hide-comment"> <?php esc_html_e('Hide Comments','creatividad'); ?> </span> </button>
									<div class="clear"></div>

									
									<div id="comment-results" class="collapse ">

										<?php comments_template(); ?>
										
									</div>
								<?php } ?>
				
							</div>
							
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
<?php 

	$mega_footer_check = $footer_check_mb->the_meta();

		if(is_array($mega_footer_check)){
			foreach( $mega_footer_check as $megafooter_option => $the_check){

				$results = $the_check[0];

				switch ( $results ) {

					case $results == 'a':
						$footer_temp = ' ';						
					break;

					case $results == 'b':
						$footer_temp = 'nomega';						
					break;

					case $results == 'c':
						$footer_temp = 'megaonly';						
					break;

					case $results == 'd':
						$footer_temp = 'none';						
					break;
				

				}	
			}
		}

	if(!empty($results)){
		get_footer($footer_temp); 
	}else{
		get_footer();
	}

?>