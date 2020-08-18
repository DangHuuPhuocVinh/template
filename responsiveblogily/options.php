<?php
// create custom plugin settings menu
add_action('admin_menu', 'my_create_menu');
if(!function_exists('my_create_menu')){
function my_create_menu() {
	//menu page
	$page=add_menu_page( 'My Theme option', 'Theme Options', 'manage_options', 'my-optionpage', 'my_settings_page', plugins_url( 'myplugn/images/icon.png' ), 6 );
	
  //call register settings function
  add_action( 'admin_init', 'my_register_settings' );
}
}
?>

<?php
if(!function_exists('my_settings_page')){
function my_settings_page() {
?>
<div class="wrap">
<h2>Theme Settings</h2>
<form id="landingOptions" method="post" action= "options.php">
  <?php settings_fields( 'my-settings-group' ); ?>
  <p><label for="phone">Phone</label><br/>
  <input type="text" name="phone" value="<?php echo get_option('phone')?>"/></p>
  
  <p><label for="company_address">Company Address</label><br/>
  <textarea name="company_address"><?php echo get_option('company_address')?></textarea></p>
  
  <p class="submit">
  <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
  //hoặc dùng sẵn
  <?php submit_button(); ?>
  </p>
</form>
</div>
<?php }} ?>

<input type='hidden' name='option_page' value='my-settings-group' />
<input type="hidden" name="action" value="update" />
<input type="hidden" id="_wpnonce" name="_wpnonce" value="b50e972db1" />
<input type="hidden" name="_wp_http_referer" value="/wordpress/wp-admin/admin.php?page=my-optionpage" />