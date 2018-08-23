<form method="get" id="pagelyform" class="pagely-form" action="<?php echo esc_url( home_url() ); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s" value="<?php _e('pagely this site...','diana-theme'); ?>" onblur="if (this.value == '') {this.value = '<?php _e('pagely this site...','diana-theme'); ?>';}" onfocus="if (this.value == '<?php _e('pagely this site...','diana-theme'); ?>') {this.value = '';}" >
		<input type="submit" value="<?php esc_attr_e( 'pagely', 'diana-theme' ); ?>" />
	</fieldset>
</form>
