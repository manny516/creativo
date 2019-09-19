<div class="my_meta_control">
 
	<p><?php esc_html_e('Select Footer Style Option','creatividad'); ?></p>
		
		<?php $mb->the_field('footer_option'); ?>
		<select name="<?php $mb->the_name(); ?>">
		<option value="a"<?php $mb->the_select_state('a'); ?>> <?php esc_html_e('Default','creatividad'); ?></option>	
		<option value="b"<?php $mb->the_select_state('b'); ?>> <?php esc_html_e('Hide Mega Footer','creatividad'); ?></option>
		<option value="c"<?php $mb->the_select_state('c'); ?>> <?php esc_html_e('Hide Footer','creatividad'); ?></option>
		<option value="d"<?php $mb->the_select_state('d'); ?>> <?php esc_html_e('Hide Mega Footer & Footer','creatividad'); ?></option>

	</select>

	<div class="clear"> </div>
</div>