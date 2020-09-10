<h1>Sunset Contact Form</h1>
<!-- <h3 class="Theme_option_title">Manage Options</h3>
<p>Customize Sidebar Options</p> -->
<?php settings_errors(); ?>

<?php 
    // $picture = esc_attr( get_option('profile_picture') );
?>


<form method="post" action="options.php" class='sunset-general-form'>
    <?php settings_fields('sunset-contact-options'); ?>
    <?php do_settings_sections('vinh_sunset_theme_contact'); ?>
    <?php submit_button(); ?>
</form>