<?php
/**
 * @package WordPress
 * @subpackage bodega Theme
 */


/*-----------------------------------------------------------------------------------*/
/* REGISTER Admin */
/*-----------------------------------------------------------------------------------*/
function workz_theme_settings_init(){
	register_setting( 'workz_theme_settings', 'workz_theme_settings' );
}


// add js for admin
function workz_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
}
//add css for admin
function workz_style() {
	wp_enqueue_style('thickbox');
}
function workz_echo_scripts()
{
?>

<script type="text/javascript">
//<![CDATA[
jQuery(document).ready(function() {

// Media Uploader
window.formfield = '';

jQuery('.upload_image_button').live('click', function() {
	window.formfield = jQuery('.upload_field',jQuery(this).parent());
	tb_show('', 'media-upload.php?type=image&TB_iframe=true');
	return false;
});

window.original_send_to_editor = window.send_to_editor;
window.send_to_editor = function(html) {
	if (window.formfield) {
		imgurl = jQuery('img',html).attr('src');
		window.formfield.val(imgurl);
		tb_remove();
	}
	else {
		window.original_send_to_editor(html);
	}
	window.formfield = '';
	window.imagefield = false;
}

});
//]]> 
</script>
<?php
}

if (isset($_GET['page']) && $_GET['page'] == 'bodega-settings') {
	add_action('admin_print_scripts', 'workz_scripts'); 
	add_action('admin_print_styles', 'workz_style');
	add_action('admin_head', 'workz_echo_scripts');
}


function workz_add_settings_page() {
add_theme_page( __( 'bodega' ), __( 'Podesavanje Teme' ), 'manage_options', 'bodega-settings', 'workz_theme_settings_page');
}

add_action( 'admin_init', 'workz_theme_settings_init' );
add_action( 'admin_menu', 'workz_add_settings_page' );

function workz_theme_settings_page() {
	
global $slider_effects;
?>


<?php 
/*-----------------------------------------------------------------------------------*/
/* START Admin */
/*-----------------------------------------------------------------------------------*/
?>

<div class="wrap">

<?php
// If the form has just been submitted, this shows the notification
if ( $_GET['settings-updated'] ) { ?>
<div id="message" class="updated fade bodega-message"><p><?php _e('Sacuvaj podesavanja','bodega'); ?></p></div>
<?php } ?>

<div id="icon-options-general" class="icon32"></div>
<h2><?php _e( 'ChicagoDesavanja Template' ) ?></h2>

<form method="post" action="options.php">

<?php settings_fields( 'workz_theme_settings' ); ?>
<?php $options = get_option( 'workz_theme_settings' ); ?>

<table class="form-table">  

<tr valign="top">
<th scope="row"><?php _e( 'Favicon', 'bodega' ); ?></th>
<td>
<input id="workz_theme_settings[favicon]" class="regular-text" type="text" size="36" name="workz_theme_settings[favicon]" value="<?php esc_attr_e( $options['favicon'] ); ?>" />
<br />
<label class="description abouttxtdescription" for="workz_theme_settings[favicon]"><?php _e( 'Upload or type in the URL for the site favicon.' ); ?></label>
</td>
</tr>

<tr valign="top">
<th scope="row"><?php _e( 'Logo', 'bodega' ); ?></th>
<td>
<input id="workz_theme_settings[upload_mainlogo]" class="regular-text upload_field" type="text" size="36" name="workz_theme_settings[upload_mainlogo]" value="<?php esc_attr_e( $options['upload_mainlogo'] ); ?>" />
<input class="upload_image_button button-secondary" type="button" value="Upload Image" />
<br />
<label class="description abouttxtdescription" for="workz_theme_settings[logo]"><?php _e( 'Upload or type in the URL for the site logo.' ); ?></label>
</td>
</tr>

<tr valign="top">
<th scope="row">Theme Credits</th>
<td>Ovu temu je dizajnirao SimpleLook agencija za racunarsko programiranje.<br />
Autor ove teme: Miladinovic Dusan<br/>
Napomena: Ukoliko Vam je potrebna podrska molimo Vas kontaktirajte nas skype: eskimoweb
</p>
</td>
</tr>

</table>
<p class="submit-changes">
<input type="submit" class="button-primary" value="<?php _e( 'Sacuvaj podesavanja' ); ?>" />
</p>
</form>
</div><!-- END wrap -->

<?php
}
//sanitize and validate
function workz_options_validate( $input ) {
	global $select_options, $radio_options;
	if ( ! isset( $input['option1'] ) )
		$input['option1'] = null;
	$input['option1'] = ( $input['option1'] == 1 ? 1 : 0 );
	$input['sometext'] = wp_filter_nohtml_kses( $input['sometext'] );
	if ( ! isset( $input['radioinput'] ) )
		$input['radioinput'] = null;
	if ( ! array_key_exists( $input['radioinput'], $radio_options ) )
		$input['radioinput'] = null;
	$input['sometextarea'] = wp_filter_post_kses( $input['sometextarea'] );

	return $input;
}

?>