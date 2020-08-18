
<?php
///// upload image
 
    if (isset($_FILES["fileToUpload"])) {
    
        $new_name = basename("echo DF_IMAGE . '/uploaded-'" . $_FILES["fileToUpload"]["name"]);
        $destination_path = "echo DF_IMAGE;";
        $file_target = $destination_path . $new_name; // New variable
    
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file_target)) {
            echo "<img src=" . $file_target . " height=200 width=300 />";
        }
    }


///////
?>