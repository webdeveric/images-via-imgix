<?php
function imgix_options_page() {
	global $imgix_options;

	ob_start();
?>
	<div class="wrap">
		<p><img src="https://assets.imgix.net/imgix-logo-web-2014.pdf?page=2&fm=png&w=200&h=200"></p>
		<p><strong>Need help getting started?</strong> It's easy! Check out our <a href="https://github.com/wladston/imgix-wordpress#getting-started" target="_blank">instructions.</a></p>
		<form method="post" action="options.php">
			<?php settings_fields('imgix_settings_group'); ?>

			<table>

				<tr>
					<td><label class="description" for="imgix_settings[cdn_link]"><?php _e('imgix Source', 'imgix_domain'); ?></td>
					  <td><input id="imgix_settings[cdn_link]" type="url" name="imgix_settings[cdn_link]" placeholder="http://yourcompany.imgix.net" value="<?php echo isset($imgix_options['cdn_link']) ? $imgix_options['cdn_link'] : ''; ?>" style="width:270px" /><small></td>
					  <td></td>
				</tr>

				<tr>
					<td><label class="description" for="imgix_settings[auto_format]"><?php _e('<a href="http://blog.imgix.com/post/90838796454/webp-jpeg-xr-progressive-jpg-support-w-auto" target="_blank">Auto Format</a> Images', 'auto_format'); ?></label></td>
					<td><input id="imgix_settings[auto_format]" type="checkbox" name="imgix_settings[auto_format]" value="1" <?php echo isset($imgix_options['auto_format']) && $imgix_options['auto_format'] === "1" ? 'checked="checked"': ''; ?> /></td>
					<td></td>
				</tr>

				<tr>
					<td><label class="description" for="imgix_settings[auto_enhance]"><?php _e('<a href="http://blog.imgix.com/post/85095931364/autoenhance" target="_blank">Auto Enhance</a> Images', 'auto_enhance'); ?></label></td>
					<td><input id="imgix_settings[auto_enhance]" type="checkbox" name="imgix_settings[auto_enhance]" value="1" <?php echo isset($imgix_options['auto_enhance']) && $imgix_options['auto_enhance'] === "1" ? 'checked="checked"': ''; ?> /></td>
					<td></td>
				</tr>

				<tr>
					<td><label class="description" for="imgix_settings[add_dpi2_srcset]"><?php _e('Automatically add retina images using srcset', 'add_dpi2_srcset'); ?></label></td>
					<td><input id="imgix_settings[add_dpi2_srcset]" type="checkbox" name="imgix_settings[add_dpi2_srcset]" value="1" <?php echo isset($imgix_options['add_dpi2_srcset']) && $imgix_options['add_dpi2_srcset'] === "1" ? 'checked="checked"': ''; ?> /></td>
					<td></td>
				</tr>

				<tr>
					<td colspan="2">
					<p class="submit">
						<input type="submit" class="button-primary" value="<?php _e('Save Options', 'imgix_domain'); ?>" />
					</p>
					</td>
				</tr>
			</table>
		</form>

		<p class="description">
			This plugin is powered by <a href="http://www.imgix.com" target="_blank">imgix</a>. You can find and contribute to the code on <a href="https://github.com/wladston/imgix-wordpress" target="_blank">GitHub</a>.
		</p>
	</div>
<?php
	echo ob_get_clean();
}

function imgix_add_options_link() {
	add_options_page('imgix', 'imgix', 'manage_options', 'imgix-options', 'imgix_options_page');
}
add_action('admin_menu', 'imgix_add_options_link');

function imgix_register_settings() {
	// creates our settings in the options table
	register_setting('imgix_settings_group', 'imgix_settings');
}

add_action('admin_init', 'imgix_register_settings');
