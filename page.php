<?php get_header(); ?>
		<?php

	 	$sub_header_banner = $sub_header_mb->the_meta();

	 	if(is_array($sub_header_banner)){
			
			foreach( $sub_header_banner as $sub_header_option=>$the_option ){
	 
	 	 		$src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	 	 		$option =  $the_option[0];
	 	 	}

	 	 }
		 
		 if(isset($src) != NULL && $option == "yes"){
			 $echo_results = esc_url($src[0]);
			 $feature_bg = "background:url('{$echo_results}') no-repeat ";
			 ?>
			<div id="sub-full-image" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_attr($echo_results); ?> "  >  
				<div id="inner-content" class="container"> 
					<h1> <?php echo esc_html(get_the_title()); ?></h1>
					<?php if (function_exists('creatividad_qt_custom_breadcrumbs')) creatividad_qt_custom_breadcrumbs(); ?>

				</div>

			</div>
			 
		<?php
		
		 }else{
		 ?>
			<div id="sub-el-rico" >
				<div class="container">
					<div class="col-md-8 row">
						<h1> <?php echo esc_html(get_the_title()); ?></h1>
						<?php if (function_exists('creatividad_qt_custom_breadcrumbs')) creatividad_qt_custom_breadcrumbs(); ?>

						
					</div>
	
				</div>
			</div>  
			<?php } ?>

			<div class="theme-main-page">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
					<div class="post main-posts container" id="the-post">
						<div class="entry main-page">
							<?php the_content(); ?>

						</div>
					
						<?php if( comments_open() ) { ?>	

						<button id="comment-trigger" class="col-sm-8 col-sm-offset-2 show-comments-bar btn" data-toggle="collapse" data-target="#comment-results"> <span class="inner-text"> <?php esc_html_e('Show Comments','creatividad'); ?></span>  <span class="inner-text" id="hide-comment"> <?php esc_html_e('Hide Comments','creatividad'); ?></span> </button>
				
						<div class="clear"></div>

						<div id="comment-results" class="collapse ">

							<?php comments_template(); ?>
							
						</div>

						<?php } ?>
						<div class="clear"></div>
						

					</div>
					<?php endwhile; endif; ?>	
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