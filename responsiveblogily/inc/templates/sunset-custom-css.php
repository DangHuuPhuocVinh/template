<h1>Sunset Custom CSS</h1>
<!-- <h3 class="Theme_option_title">Manage Options</h3>
<p>Customize Sidebar Options</p> -->
<?php settings_errors(); ?>

<?php 
    // $picture = esc_attr( get_option('profile_picture') );
?>


<form method="post" action="options.php" class='sunset-general-form'>
    <?php settings_fields('sunset-custom-css-options'); ?>
    <?php do_settings_sections('vinh_sunset_css'); ?>
    <?php submit_button(); ?>
</form>