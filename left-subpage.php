<?php
/*
Template Name: Left Sidebar
*/
?>


<?php get_header(); ?>

	<div class="container">

		<div class="main-page media-body" >
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
				<div class="post main-posts" id="post-<?php the_ID(); ?>">
					<div class="left-template entry container ">

						<div class="col-md-9 content-side col-md-push-3">
							<?php the_content(); ?>
						</div>
						<div class="col-md-3 col-md-pull-9 sidebar-left row ">  
							 <?php  get_sidebar(); ?> 
						</div>
					</div>
				</div>
			<?php endwhile; endif; ?>
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


