<h4> <?php esc_html_e('Add a slider Shortcode to add a full width slider banner', 'creatividad') ?> </h4>
 
<?php while($mb->have_fields_and_multi('docs')): ?>
<?php $mb->the_group_open(); ?>
 
		<?php $mb->the_field('layer_slider'); ?>
		<input type="text" name="<?php $mb->the_name(); ?>" size="30" value="<?php $mb->the_value();?>"/>
<?php $mb->the_group_close(); ?>
<?php endwhile; ?>