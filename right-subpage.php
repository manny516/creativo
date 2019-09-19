
<?php
/*
Template Name: Right Sidebar
*/
?>

<?php get_header(); ?>

	<div class="main-page">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>		
			<div class="post main-posts" id="post-<?php the_ID(); ?>">
				<div class="entry container right-template">
					<div class="side-left content-side  col-md-9 ">
						<?php the_content(); ?>
					</div>
					<div class="col-md-3  sidebar-right pull-right row">  
						<?php get_sidebar(); ?> 
					</div>
				</div>
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