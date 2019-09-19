<?php
/*
Template Name: No Title-Full page
*/
?>

<?php 
	
	$nav_eval = $nav_check_mb->the_meta();

	if(is_array($nav_eval)){

	    foreach( $nav_eval as $nav_option=>$the_option ){
	        $nav_eval_option =  $the_option[0];
	    }
	 }

	 if(isset($nav_eval_option) == "yes"){
		get_header('none'); 
	}else{
		get_header();
	}

	?>

	<!-- Full width Layer slider-->    
		<?php
		$layer_banner = $slider_mb  ->the_meta();
			if(is_array($layer_banner)){
	        foreach($layer_banner as $slider => $slider_data){
	            echo do_shortcode($slider_data[0]['layer_slider']);
	        }
        }
         
	 	?>	
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<div class="post main-posts container" id="the-post">
				<div class="entry main-page">
					<?php the_content(); ?>
				</div>
		
			</div>
			
			<?php endwhile; endif; ?>
							
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
