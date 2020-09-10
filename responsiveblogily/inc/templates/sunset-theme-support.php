<h1>Sunset Theme Support</h1>
<!-- <h3 class="Theme_option_title">Manage Options</h3>
<p>Customize Sidebar Options</p> -->
<?php settings_errors(); ?>

<?php 
    // $picture = esc_attr( get_option('profile_picture') );
?>


<form method="post" action="options.php" class='sunset-general-form'>
    <?php settings_fields('sunset-theme-support'); ?>
    <?php do_settings_sections('vinh_sunset_theme'); ?>
    <?php submit_button(); ?>
</form>