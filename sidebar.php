<div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        <div class="default-widget">
    	   <?php get_search_form(); ?>
        </div>
    
        <div class="default-widget">
            <ul>
    	       <?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
            </ul>
        </div>
        
        <div class="default-widget">
        	<h2> <?php esc_html_e('Archives','creatividad'); ?> </h2>
        	<ul>
        		<?php wp_get_archives('type=monthly'); ?>
        	</ul>
        </div>
        

        <div class="default-widget">
            <h2> <?php esc_html_e('Categories','creatividad');  ?></h2>
            <ul>
        	   <?php wp_list_categories('show_count=1&title_li='); ?>
            </ul>
            
        	<?php wp_list_bookmarks(); ?>
        </div>
    
        <div class="default-widget">
        	<h2> <?php esc_html_e('Meta','creatividad');?> </h2>
        	<ul>
        		<?php wp_register(); ?>
        		<li><?php wp_loginout(); ?></li>
        		<li><a href="http://wordpress.org/" title="<?php echo esc_attr('Powered by WordPress, state-of-the-art semantic personal publishing platform.','creatividad'); ?>"> <?php esc_html_e('WordPress','creatividad'); ?></a></li>
        		<?php wp_meta(); ?>
        	</ul>
        </div>
    	

        <div class="default-widget">
        	<h2> <?php esc_html_e('Subscribe','creatividad'); ?> </h2>
        	<ul>
        		<li><a href="<?php bloginfo('rss2_url'); ?>"> <?php esc_html_e('Entries','creatividad'); ?> (RSS)</a></li>
        		<li><a href="<?php bloginfo('comments_rss2_url'); ?>"> <?php esc_html_e('Comments','creatividad'); ?> (RSS)</a></li>
        	</ul>
        </div>
	
	<?php endif; ?>

</div>