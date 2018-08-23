<form method="get" id="pagelyform" class="pagely-form" action="<?php echo esc_url( home_url() ); ?>" _lpchecked="1">
	<fieldset>
		<input type="text" name="s" id="s" value="<?php _e('pagely this site...','landing-pagely'); ?>" onblur="if (this.value == '') {this.value = '<?php _e('pagely this site...','landing-pagely'); ?>';}" onfocus="if (this.value == '<?php _e('pagely this site...','landing-pagely'); ?>') {this.value = '';}" >
		<input type="submit" value="<?php esc_attr_e( 'pagely', 'landing-pagely' ); ?>" />
	</fieldset>
</form>
