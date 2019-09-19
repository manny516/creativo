<?php get_header(); ?>
 <div id="article-trigger" class="hidden-xs hidden-sm"> <span class="fa fa-newspaper-o">  </span>  </div>
 	 <?php //Get the Thumbnail URL
		$src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	 
		$header_banner = $sub_header_mb->the_meta();

 		if(is_array($header_banner)){
		
			foreach( $header_banner as $header_option=>$the_option ){
	 
	 	 		$src = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
	 	 		$option =  $the_option[0];

	 	 	}

	 	 }
		 
		 if(!empty($src) && isset($option) == "yes"){
			 $echo_results = esc_url ($src[0]);
			 $feature_bg = "background:url('{$echo_results}') no-repeat ";
			 
			 ?>

			<div id="full-image" class="parallax-window" data-parallax="scroll" data-image-src="<?php echo esc_attr($echo_results); ?> "  >  
				<div id="inner-content" class="container"> 
					<h1> 
						<?php
							$title_check = get_the_title();
							if(strlen($title_check) == 0){
								echo esc_html(get_the_date());
							}else{
								echo esc_html(get_the_title());
							}
						?>
					</h1>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
					<span>By: <?php echo esc_html(get_the_author()); ?></span> | <span> <?php echo esc_html(the_date('l, F j, Y')); ?></span> | <span> <?php echo esc_html(the_category(',')); ?> </span>|<span class="the-comments"> <?php echo comments_number( esc_html__('Leave a Comment', 'creatividad'), esc_html__('1 Comment', 'creatividad'), esc_html__('% Comments','creatividad') ) ;?> </span>
					<?php 	
						$title = esc_html(get_the_title());
						str_replace(" ", "+", $title);  

						if(function_exists('creatividad_js')){
							if(!function_exists('mannyidea_creatividad_footer_social')){
								$creativo_twitter = "";
							}
					?>

					<nav id="full-share-this">
				
						<a id="facebook-share" href="javascript: void(0)" > <span class="btn fa fa-facebook"> </span> </a>
						<a id="twitter-share" href="javascript: void(0)" data-handler="<?php echo esc_attr($creativo_twitter); ?>" > <span class="btn fa fa-twitter"> </span> </a>
						<a id="google-share" href="javascript: void(0)" > <span class="btn fa fa-google-plus"> </span> </a>
						<a id="pintetrest-share" href="javascript: void(0)"> <span class="btn fa fa-pinterest-p"> </span> </a>
						
					</nav>
					<?php 

						}
					endwhile; endif; 

					?>
				</div>

			</div>
			 
		<?php
		 }else{
		 ?>

			<div id="el-rico" >
				<div class="container">
					<div class="col-md-8 post-title">
						<h1> <?php echo esc_html(get_the_title()); ?></h1>
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID));?>
						<span>By: <?php echo esc_html(get_the_author()); ?></span> | <span> <?php echo esc_html(the_date('l, F j, Y')); ?></span> | <span> <?php echo esc_html(the_category(',')); ?> </span>|<span class="the-comments"> <?php echo comments_number( esc_html__('Leave a Comment', 'creatividad'), esc_html__('1 Comment', 'creatividad'), esc_html__('% Comments', 'creatividad') ) ;?> </span>
					</div>
					<?php endwhile; endif; ?>

			
					<div class="col-md-3 col-md-offset-1 hidden-sm hidden-xs">
					<?php 	
						$title = get_the_title();
						str_replace(" ", "+", $title);  
						if(function_exists('creatividad_js')){
							if(!function_exists('mannyidea_creatividad_footer_social')){
								$creativo_twitter = "";
							}
					?>
						<nav id="share-this">

							<a id="facebook-share" href="javascript: void(0)" > <span class="btn fa fa-facebook creatividad-fb"> </span> </a>
							<a id="twitter-share" href="javascript: void(0)" data-handler="<?php echo esc_attr($creativo_twitter); ?>" > <span class="btn fa fa-twitter creatividad-tw"> </span> </a>
							<a id="google-share" href="javascript: void(0)"> <span class="btn fa fa-google-plus creatividad-pl"> </span> </a>
							<a id="pintetrest-share" href="javascript: void(0)"> <span class="btn fa fa-pinterest-p creatividad-pn"> </span> </a>

							 
						</nav>

						<?php } ?>
					</div>
				</div>
			</div>  
			<?php } ?>

			<?php

				$sidebar_meta = $siderbar_mb->the_meta();

				if(is_array($sidebar_meta)){
				
					foreach( $sidebar_meta as $sidebar=>$the_option ){
			 	 		$side_option =  $the_option[0];
			 	 	}

			 	 }

			 	 if(isset($side_option) == "yes"){
			 	 	$full_width_content = "post-full-width";
			 	 	$full_post_width = "col-md-12";
			 	 	$sidebar_draw = "id=sidebar-draw";
			 	 	$sidebar_class = NULL;
			 	 	$sidebar_id = "id=inner-sidebar";
			 	 	wp_dequeue_script('ultimate-smooth-scroll');
			 	 	$start_slide = "expanded";
			 	 	$the_trigger = " <div id=draw-trigger><span class='fa fa-chevron-left'></span></div>" ;
			 	 	?>
			 	 	
			 	 	<?php
			 	 }else{

			 	 	$full_width_content = NULL;
			 	 	$full_post_width = "col-md-8";
			 	 	$sidebar_class = "col-md-3"." "."col-md-offset-1";
			 	 	$sidebar_id = NULL;
			 	 	$sidebar_draw = NULL;
			 	 	$the_trigger= NULL;
			 	 	$start_slide = NULL;

			 	 }

			?>

			<div class="container ">
					<div class="<?php echo esc_attr($full_post_width)." ".esc_attr($full_width_content); ?> creatividad-single">
				
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					
								<div class="entry">
					

									<div class="no-flex-zone">
										<?php creatividad_post_thumbnail(); ?>
										<?php the_content(); ?>
										<?php

											wp_link_pages( array(
												'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'creatividad' ) . '</span>',
												'after'       => '</div>',
												'link_before' => '<span>',
												'link_after'  => '</span>',
												'pagelink'    => '<span class="screen-reader-text pag-nav">' . __( 'Page', 'creatividad' ) . ' </span>%',
												'separator'   => '<span class="screen-reader-text">, </span>',
											) );
										
										?>
									</div>

									<?php       
									$author_desc = esc_html(get_the_author_meta('description'));

									if($author_desc != NULL){
									?>
									<div class="get-it"></div>
									<div id="about-author" class="col-sm-12">
										
										<h3> <?php esc_html_e('About the Author', 'creatividad'); ?> </h3>

										<!-- Check if Avatar plugin exist first  -->
										<?php if(class_exists('WP_User_Avatar_Setup')){  ?>

											<div class="col-sm-2 row">
											<?php echo get_avatar( get_the_author_meta('ID') ); ?>
											</div>
										<?php }?>

										<div class="col-sm-9">
											<h4 class="author-name"><?php echo esc_html(get_the_author_meta('first_name'))." ". esc_html(get_the_author_meta('last_name')); ?></h4>
											<p> <?php echo esc_html(get_the_author_meta('description')); ?> </p>
										</div>
									</div>
									<hr />

									<?php  } ?>
								</div>
								
								<?php edit_post_link('Edit this entry','',''); ?>
								
							</div>
						<div id="next-prev-trigger"></div>	
						<?php //if( comments_open() ) { ?>	
						<button id="comment-trigger" class="col-sm-8 col-sm-offset-2 show-comments-bar btn" data-toggle="collapse" data-target="#comment-results"> <span class="inner-text"> <?php esc_html_e('Show Comments','creatividad'); ?></span>  <span class="inner-text" id="hide-comment"> <?php esc_html_e('Hide Comments','creatividad'); ?></span> </button>
						<div class="clear"></div>

						
						<div id="comment-results" class="collapse ">

							<?php comments_template(); ?>
							
						</div>

						<?php

						?>

						<?php  endwhile; endif; ?>
					</div>
					
					<div <?php echo esc_attr($sidebar_draw); ?>  class=" <?php echo esc_attr($sidebar_class)." ".esc_attr($start_slide); ?>  sidebar pull-right">
						<?php echo balancetags($the_trigger,true);  ?>
						<div <?php echo esc_attr($sidebar_id); ?> >
						<?php 
							if(is_active_sidebar( 'blog-widgets')){  
								dynamic_sidebar( 'blog-widgets' );
							}else{
								get_sidebar();
							}
						?>
					</div>
					</div>				

	</div>


	<div id="article-next-prev" class="hidden-sm hidden-xs">


		<?php
			$next_post_link_url = get_permalink( get_adjacent_post(false,'',false) ); 
			$prev_post_link_url = get_permalink( get_adjacent_post(false,'',true) );
			$current_post_link = get_permalink();
		?>

		<?php  

			if( $prev_post_link_url == $current_post_link ){
				
				$remove_prev = "remove_article";
			}else{
				$remove_prev = " ";
			}

		?>


		<div id="prev-article" class=" col-md-12 <?php echo esc_attr( $remove_prev); ?>">
			<div class="col-md-1 row article-tab"> <a href="<?php echo esc_url($prev_post_link_url); ?>" > <?php esc_html_e('Prev','creatividad'); ?> </a> </div>
			<div class="col-md-11 article-container">

				<?php
                    $prevPost = get_previous_post();

                    ?>
				<div class=" col-md-4 feature-image ">
					
                    <?php 
						 if(!empty($prevthumbnail)){
							previous_post_link('%link', $prevthumbnail); 
						}else{							
							previous_post_link('%link', "<p class='left-arrow arrow-size'> <i class='fa fa-chevron-left'> </i> </p>");
						}
						?>
						
				</div>	


				<div class=" col-md-8 feature-desc ">

					<?php $prevPost = get_previous_post();
						if($prevPost) {?>
						<?php previous_post_link('%link', " <h3> %title </h3> "); ?>
						<?php } ?>
						<?php 
						$excerpt = the_excerpt();
						$text = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $excerpt);
						echo substr($text,0,140)."..."; 
						?>

				</div>
				<div class="clear"></div>

			</div>
		</div>
		<div class="clear"></div>
		<div class="creativo-separator">  </div>
		
		<?php

			if( $next_post_link_url == $current_post_link ){
				
				$remove_next = "remove_article";
			}else{
				$remove_next = " ";
			}
		?>

		<div id="next-article" class="row col-md-12 <?php echo esc_attr($remove_next); ?>">
			<div class="col-md-11 article-container">
				<div class=" col-md-8 feature-desc ">
					
					<?php $nextPost = get_next_post();

						if($nextPost) {?>
						<?php next_post_link('%link'," <h3> %title </h3>" ); ?>
						<?php } ?>
						<?php 
						//$excerpt = $nextPost->post_excerpt ? $nextPost->post_excerpt :apply_filters('get_the_excerpt', $nextPost->post_excerpt);
						$excerpt = the_excerpt();
						$text = preg_replace( '|\[(.+?)\](.+?\[/\\1\])?|s', '', $excerpt); 
						echo substr($text,0,140)."..."; ?>


				</div>

				<?php
                    $nextPost = get_next_post();

                    if(!empty($nextPost)){
                    	$nextthumbnail = get_the_post_thumbnail($nextPost->ID,'creatividad_article-thumb'); 
                	}

                    if(!empty($nextthumbnail)){
                    	$remove_next = ' ';
                    }else{

						$remove_next = 'remove_article';                    	
                    }

                    ?>

				<div class=" col-md-4 feature-image" >

					<?php
					if(!empty($nextthumbnail)){
                    	next_post_link('%link', $nextthumbnail); 
                	}else{
						next_post_link('%link', "<p class='right-arrow arrow-size'> <i class='fa fa-chevron-right'> </i> </p>");
					}
                	?>
				</div>
				 <div class="clear"> </div>
			</div>
			<div class="col-md-1 article-tab"> <a href="<?php echo esc_url($next_post_link_url); ?>" > <?php esc_html_e('Next','creatividad'); ?> </a> </div>
	</div>
	 <div class="clear"> </div>
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