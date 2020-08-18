<?php

/**
 * Template Name: Change Image
 */

?>
<?php get_header(); ?>

<div class="image_upload">
    <form ethod="POST" action="<?php echo THEME_URI . '/result.php;' ?>" enctype="multipart/form-data"></form>
    <tr>
        Please select the image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
    </tr>

    <tr>
        <td>
            <input type="submit" name="submit" value="Submit" >
        </td>
    </tr>
</div>

<?php get_footer(); ?>