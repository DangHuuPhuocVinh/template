<?php
/*
 *@package sunsettheme
  ==========================
       ADMIN PAGE
  ========================== 
 */
?>


<?php
add_action('admin_menu', 'sunset_add_admin_page');
add_action('admin_menu', 'sunset_custom_settings');




function sunset_add_admin_page()
{
	//add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )
	add_menu_page('Sunset Theme Options', 'Sunset', 'manage_options', 'vinh_sunset', '', null, 110);

	add_submenu_page('vinh_sunset', 'Sunset Sidebar Options', 'Sidebar', 'manage_options', 'vinh_sunset', 'sunset_theme_create_page');
	add_submenu_page('vinh_sunset', 'Sunset Theme Options', 'Theme Options', 'manage_options', 'vinh_sunset_theme', 'sunset_theme_support_page');
	add_submenu_page('vinh_sunset', 'Sunset Contact Form', 'Contact Form', 'manage_options', 'vinh_sunset_theme_contact', 'sunset_contact_form_page');
	add_submenu_page('vinh_sunset', 'Sunset CSS Options', 'Custom CSS', 'manage_options', 'vinh_sunset_css', 'sunset_theme_settings_page');


	// add_action('admin-init', 'sunset_custom_settings');
}


function sunset_custom_settings()
{
	// Khai bao cho meta box field
	register_setting('sunset-settings-group', 'profile_picture');
	register_setting('sunset-settings-group', 'first_name');
	register_setting('sunset-settings-group', 'last_name');
	register_setting('sunset-settings-group', 'twitter_handler');
	// tao sidebar menu
	add_settings_section('sunset-sidebar-options', 'Sidebar Option', 'sunset_sidebar_options', 'vinh_sunset');
	// add field vao sidebar menu
	add_settings_field('sidebar-profile-picture', 'Profile Picture', 'sunset_sidebar_profile', 'vinh_sunset', 'sunset-sidebar-options');
	add_settings_field('sidebar-name', 'Full Name', 'sunset_sidebar_name', 'vinh_sunset', 'sunset-sidebar-options');
	add_settings_field('sidebar-twitter', 'Twitter handler', 'sunset_sidebar_twitter', 'vinh_sunset', 'sunset-sidebar-options');

	//Theme Support Options
	register_setting('sunset-theme-support', 'post_formats','');
	// register_setting('sunset-theme-support', 'custom_header');
	// register_setting('sunset-theme-support', 'custom_background');

	add_settings_section('sunset-theme-options', 'Theme Options', 'sunset_theme_options', 'vinh_sunset_theme');

	add_settings_field('post-formats', 'Post Formats', 'sunset_post_formats', 'vinh_sunset_theme', 'sunset-theme-options');
	add_settings_field('post-formats', 'Post Formats', 'sunset_post_formats_callback', 'vinh_sunset_theme', 'sunset-theme-options');
	// add_settings_field('custom-header', 'Custom Header', 'sunset_custom_header', 'vinh_sunset_theme', 'sunset-theme-options');
	// add_settings_field('custom-background', 'Custom Background', 'sunset_custom_background', 'vinh_sunset_theme', 'sunset-theme-options');

	//Contact Form Options
	register_setting('sunset-contact-options', 'activate_form');

	add_settings_section('sunset-contact-section', 'Contact Form', 'sunset_contact_section', 'vinh_sunset_theme_contact');

	add_settings_field('activate-form', 'Contact Form', 'sunset_activate_contact', 'vinh_sunset_theme_contact', 'sunset-contact-section');

	//Contact CSS Options
	register_setting('sunset-custom-css-options', 'sunset_css');

	add_settings_section('sunset-custom-css-section', 'Custom CSS', 'sunset_custom_css_section_callback', 'vinh_sunset_css');

	add_settings_field('custom-css', 'Insert your Custom CSS', 'sunset_custom_css_callback', 'vinh_sunset_css', 'sunset-custom-css-section');
}

function sunset_custom_css_section_callback()
{
	echo 'Customize Sunset Theme with your own CSS';
}

function sunset_custom_css_callback()
{
	$css = get_option('sunset_css');
	$css = (empty($css) ? '/* Sunset Theme Custom CSS */' : $css);
	echo '<textarea placeholder="Sunset Custom CSS">'.$css.'</textarea>';
}

function sunset_theme_options()
{
	echo 'Activate and Deactivate specific Theme Support Options';
}

function sunset_contact_section()
{
	echo 'Activate and Deactivate the Built-in Contact Form';
}

function sunset_activate_contact()
{
	$options = get_option('activate_contact');
	$checked = (@$options == 1 ? 'checked' : '');
	echo '<label><input type="checkbox" id="custom_background" name="activate_contact" value="1" ' . $checked . ' > Activate the Contact Form </label><br>';
}

function sunset_post_formats_callback( $input ){
	var_dump($input) ;
	echo $input;
}

function sunset_post_formats()
{
	$options = get_option('post_formats');
	$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
	$output = '';

	foreach ($formats as $format) {
		$checked = (@$options[$format] == 1 ? 'checked' : '');
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_format['.$format.']" value="1" ' . $checked . ' > ' . $format . '</label><br>';
	}

	echo $output;
}

function sunset_custom_header()
{
	$options = get_option('custom_header');
	$checked = (@$options == 1 ? 'checked' : '');
	echo '<label><input type="checkbox" id="custom_header" name="custom_header" value="1" ' . $checked . ' > Activate the Custom Header </label><br>';
}

function sunset_custom_background()
{
	$options = get_option('custom_background');
	$checked = (@$options == 1 ? 'checked' : '');
	echo '<label><input type="checkbox" id="custom_background" name="custom_background" value="1" ' . $checked . ' > Activate the Custom Background </label><br>';
}

function sunset_sidebar_options()
{
	echo 'Customize your Sidebar Information';
}

function sunset_sidebar_profile()
{
	$picture = esc_attr(get_option('profile_picture'));
	if (empty($picture)) {
		echo '<input type="button" id="upload-button" class="button button-secondary" value="Upload Profile Picture" > 
		<input type="hidden" id="profile-picture" name="profile_picture" value="" />';
	} else {
		echo '<input type="button" id="upload-button" class="button button-secondary" value="Replace Profile Picture" > 
		<input type="hidden" id="profile-picture" name="profile_picture" value="' . $picture . '" /><input type="button" id="remove-picture" class="button button-secondary" 
		value="Remove"  ';
	}
}

function sunset_sidebar_name()
{
	$first_name = esc_attr(get_option('first_name'));
	$last_name = esc_attr(get_option('last_name'));

	echo '<input type="text" name="first_name" value="' . $first_name . '" placeholder="First Name" />
	<input type="text" name="last_name" value="' . $last_name . '" placeholder="Last Name" />';
}

function sunset_sidebar_twitter()
{
	$twitter = esc_attr(get_option('twitter_handler'));
	echo '<input type="text" name="twitter_handler" value="' . $twitter . '" />';
}

function sunset_sanitize_twitter_handler($input)
{
	$output = sanitize_text_field($input);
	$output = str_replace('@', '', $output);
	return $output;
}

function sunset_sanitize_name_handler($input)
{
	$output = sanitize_text_field($input);
	$output = str_replace('@', '', $output);
	return $output;
}

function sunset_theme_create_page()
{
	require_once(__ROOT__ . '/responsiveblogily/inc/templates/sunset-admin.php');
}

function sunset_theme_support_page()
{
	require_once(__ROOT__ . '/responsiveblogily/inc/templates/sunset-theme-support.php');
}

function sunset_contact_form_page()
{
	require_once(__ROOT__ . '/responsiveblogily/inc/templates/sunset-contact-form.php');
}

function sunset_theme_settings_page()
{
	require_once(__ROOT__ . '/responsiveblogily/inc/templates/sunset-custom-css.php');
}

?>