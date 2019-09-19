<div class="navigation">
	<?php 
		$old_entry = esc_html_e('Older Entries','creatividad' );
		$new_entry = esc_html_e('Newer Entry' 'creatividad' );
	 ?>
	<div class="next-posts"><?php next_posts_link("&laquo; {$old_entry}") ?></div>
	<div class="prev-posts"><?php previous_posts_link("{$new_entry}&raquo;") ?></div>
</div>