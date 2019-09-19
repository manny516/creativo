	<article <?php post_class('article-block') ?>>
					
	<div class="entry">
		<div class="theme-post no-border style2">
				
			<div class="post-value">
									 
			 	<?php echo creatividad_attachment_filter();?>
			 
			 </div>

			 <?php $sticky_post = esc_html__( 'Featured', 'creatividad' );  ?>
			 <?php if(is_sticky()){  ?>

			 	<div class="sticky-box">  

			 		<p> <?php echo $sticky_post; ?> </p>

			 	</div>

			  <?php } ?>
				
				<div class="content-container">
					<div class="col-xs-2 timestamp">
						<h2> <?php echo get_the_date('M') ?> </h2>
						<h2> <?php echo get_the_date('d') ?> </h2>
					</div>

					<div class="post-title col-xs-9 col-xs-offset-1">
						<h2 class="post-name" id="post-<?php the_ID(); ?>"><a href="<?php esc_url(the_permalink()); ?>">
							<?php
								$title_check = esc_html(get_the_title());
								if(strlen($title_check) == 0){
									echo get_the_date();
								}else{
									esc_html(the_title());
								}
							?>
						</a></h2>

						<span class="theme-post-tag theme-cat"> <i class="fa fa-tags"> </i> <?php esc_html(the_category(', ')) ?>  </span> <span class="theme-post-tag"> <i class="fa fa-comment-o"> </i>  <?php comments_number( esc_html__( 'Be the first to comment', 'creatividad'), esc_html__('1 Comment', 'creatividad'), esc_html__('% Comments', 'creatividad') ); ?>  </span>
					</div>
					<div class="clear"></div>
					 

					<div class="entry post-excerpt col-sm-12">

						<p> <?php //echo esc_html(creatividad_custom_excerpt()); ?></p>
						
						<a class="read-more-post" href="<?php esc_url(the_permalink()); ?>"> <?php esc_html_e('Read More','creatividad'); ?> </a>
	
					</div>
					<div class="clear"></div>
				</div>
		
			</div>

	</div>

</article>