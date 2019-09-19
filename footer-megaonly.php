</div>
<div id="scroll-top" class="hidden-xs hidden-sm"> <span class="fa fa-chevron-up">  </span></div>
<div class="clear"></div>	
<footer id="creatividad-footer" class="not-ready">
	<div id="fat-footer">
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
		
</footer>
<?php wp_footer(); ?>
</body>

</html>
