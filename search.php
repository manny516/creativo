<?php get_header(); ?>

	<div id="search-result" class="container result-pages">
	<?php if (have_posts()) : ?>

		<div id="search-content" class="col-md-12">
			<div class="col-md-3 row">
				<h2> <?php esc_html_e('Search Results','creatividad'); ?></h2> 
			</div>
			<div id="search-bar" class="col-md-9">
				<?php get_search_form( ); ?>
			</div>	
			<div class="clear"></div>
			<hr />
	
			<?php get_template_part('nav'); ?>
	
			<?php while (have_posts()) : the_post(); ?>
	
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
	
					<h2> <a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a> </h2>
					
					<?php get_template_part('meta'); ?>
	
					<div class="entry">
	
						<?php the_excerpt(); ?>
	
					</div>

					<a class="read-more-post" href="<?php esc_url(the_permalink()); ?>"> <?php esc_html_e('View Post','creatividad'); ?></a>
				<hr />
				</div>

	
			<?php endwhile; ?>
	
			<?php get_template_part('nav'); ?>
			</div>
		<?php else : ?>
			<div id="search-content" class="col-md-12">
				<div class="col-md-3 row">
					<h2> <?php esc_html_e('Sorry Try Again !','creatividad'); ?></h2>
				</div>
				<div id="search-bar" class="col-md-9">
					<?php get_search_form( ); ?>
				</div>
				<div class="clear"></div>	
				<hr />
			</div>
			
			<div id="no-result"> <h1> <?php esc_html_e('Sorry No Posts','creatividad'); ?></h1></div>

		<?php endif; ?>
	
	</div>

<?php get_footer(); ?>
