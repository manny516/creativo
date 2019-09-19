</div>
<div id="scroll-top" class="hidden-xs hidden-sm"> <span class="fa fa-chevron-up">  </span></div>
<div class="clear"></div>	
<footer id="creatividad-footer" class="not-ready">
	<div id="fat-footer" >
		<div class="container">

				<?php if(is_active_sidebar('footerone-widgets')){ ?>
					<div class="foot-col left foot-first">
						  <?php dynamic_sidebar( 'footerone-widgets' );?>
			
					</div>
				<?php } ?>				


				<?php if(is_active_sidebar('footertwo-widgets')){ ?>
					<div class="foot-col left">
						<?php dynamic_sidebar( 'footertwo-widgets' );?>
					</div>
				<?php } ?>

				
				<?php if(is_active_sidebar('footerthree-widgets')){ ?>
					<div class="foot-col left ">
						<?php dynamic_sidebar( 'footerthree-widgets' );?>
					</div>
				<?php } ?>
					

				<?php if(is_active_sidebar('footerfour-widgets')){ ?>	
					<div class="foot-col left foot-last">
						<?php dynamic_sidebar( 'footerfour-widgets' );?>
						
					</div>

				<?php } ?>
		</div>
	</div><!-- fat footer Ends-->
	<div id="footer-container">
		<div id="footer-logo" class="container">
			<div class="row col-sm-4 logo-footer">
				<p><?php esc_html_e('Copyright','creatividad'); ?> &copy;<?php echo current_time( 'Y', $gmt = 0 ); ?> <?php esc_html_e('All rights reserved','creatividad'); ?>.<?php echo " "; ?><?php esc_html(bloginfo( 'name' )); ?></p>
		</div>
		<div class="col-sm-6 foot-col-right social-icons-list row">
			<div id="footer-social">
				<nav class="social-text">

					<?php 
						

					if(function_exists('creatividad_add_admin')){
						creatividad_social_media();	
					 } 

					 ?>

				</nav>
			</div>
		</div>	
	</div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
