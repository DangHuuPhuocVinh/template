<h1>Sunset Sidebar Options</h1>
<!-- <h3 class="Theme_option_title">Manage Options</h3>
<p>Customize Sidebar Options</p> -->
<?php settings_errors(); ?>

<?php 
    $picture = esc_attr( get_option('profile_picture') );
    $first_name = esc_attr( get_option( 'first_name' ) );
    $last_name = esc_attr( get_option( 'last_name' ) );
    $full_name = $first_name . ' ' . $last_name;
    $social = esc_attr( get_option( 'twitter_handler' ) );
?>

<div class="sunset-sidebar-preview">
    <div class="sunset-sidebar">
        <div class="image_container">
            <div class="profile-picture">
                <img class="pic_cont" src="<?php print $picture ?>" alt="img" style="width: 275px;">
            </div>
        </div>
        <h1 class="sunset-username"><?php print $full_name; ?></h1>
        <h2 class="sunset-social"><?php print $social ?></h2>
        <div class="icons-wrapper"></div>
    </div>
</div>

<form method="post" action="options.php" class='sunset-general-form'>
    <?php settings_fields('sunset-settings-group'); ?>
    <?php do_settings_sections('vinh_sunset'); ?>
    <?php submit_button('Save Changes', 'primary', 'btnSubmit'); ?>
</form>