<?php

$column_width = '';
if(isset($view_params['phone'])) {
	$column_width = ($view_params['phone'] == 'true') ? 'one-third' : 'half';
}

?>

<div class="mk-form-row <?php echo $column_width; ?>">
	<?php if(isset($view_params['show_icon'])) : ?>
		<i class="mk-li-mail"></i>
	<?php endif; ?>	
	<input placeholder="<?php _e( 'Your Email', 'mk_framework' ); ?>" class="text-input s_txt-input" type="email" required="required" name="contact_email" value="" tabindex="<?php echo $view_params['tab_index']; ?>" />
</div>