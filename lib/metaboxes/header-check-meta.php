<div class="my_meta_control">
 
	<p> <?php esc_html_e('Custom Header Banner Setting','creatividad'); ?></p>

	<label> <?php esc_html_e( 'Set Feature image as Header Banner', 'creatividad') ?></label><br/>

	<?php $items = array('yes'); ?>

	<?php while ($mb->have_fields('cb_ex', count($items))): ?>
	
		<?php $item = $items[$mb->get_the_index()]; ?>

		<input type="checkbox" name="<?php $mb->the_name(); ?>" value="<?php echo esc_attr( $item); ?>"<?php $mb->the_checkbox_state($item); ?>/> <?php echo esc_attr( $item); ?><br/>

	<?php endwhile; ?>

</div>