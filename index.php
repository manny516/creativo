<?php get_header(); ?>

	<div id="index-result" class="container result-pages">
		
		<div id="index-content" class="col-md-9 side-left row">

			<?php if (have_posts()) : ?>
	
	 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
	
				<?php /* If this is a category archive */ if (is_category()) { ?>
					<h2 id="index-title">&#8216;<?php single_cat_title(); ?>&#8217; <?php esc_html_e('Category','creatividad'); ?></h2>
					
	
				<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
					<h2 id="index-title"> <?php esc_html_e('Posts Tagged','creatividad'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h2>
	
				<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
					<h2 id="index-title"> <?php esc_html_e('Archives By Day','creatividad'); ?> <?php echo get_the_date('F jS, Y'); ?></h2>
	
				<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
					<h2 id="index-title"> <?php esc_html_e('Archives By Month','creatividad'); ?> <?php echo get_the_date('F, Y'); ?></h2>
	
				<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
					<h2 id="index-title" class="pagetitle"> <?php esc_html_e('Archive By Year','creatividad'); ?> <?php echo get_the_date('Y'); ?></h2>
	
				<?php /* If this is an author archive */ } elseif (is_author()) { ?>
					<h2 id="index-title" class="pagetitle"><?php esc_html_e('Author Archive','creatividad'); ?></h2>
				
				<?php } ?>
				
					
				<?php while (have_posts()) : the_post(); 
				
					get_template_part( 'content', get_post_format() );			
		
				 endwhile; 

				the_posts_pagination( array(
				'prev_text'          => esc_html__( 'Previous page', 'creatividad' ),
				'next_text'          => esc_html__( 'Next page', 'creatividad' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'creatividad' ) . ' </span>',
			) );



				?>


		</div>
		<div class="col-md-3 sidebar-right row pull-right ">  
			<?php  get_sidebar(); ?>
		</div>
			
		<?php else : ?>
	
			<h2> <?php esc_html_e('Nothing found','creatividad'); ?></h2>
	
		<?php endif; ?>
	
	</div>

<?php get_footer(); ?>
