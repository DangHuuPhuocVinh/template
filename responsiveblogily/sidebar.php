<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package responsiveblogily
 */

if (!is_active_sidebar('sidebar-1')) {
	return;
}
?>

<aside id="secondary" class="featured-sidebar widget-area">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->
<div class="frame_ads">
	<iframe class="frame_ads_cont" src="<?php echo DF_IMAGE . '/tiki-99.png' ?>"></iframe>
</div>

<div class="info_of_client">
	<button id="receive_news">
		<i class="fa fa-edit"></i>
	</button>

	<!-- The Modal -->
	<div id="myModal2" class="modal1">

		<!-- Modal content -->
		<div class="modal-content2">
			<span class="close2">&times;</span>
			<p>Do you want to receive the news from us</p>
			<p><span class="error">* required field.</span></p>

    	<form method="POST" enctype="multipart/form-data">
        <?php
        $nameErr = $emailErr = $genderErr = $hobbieErr = "";
        $name = $email = $gender = $hobbie = $place = $subject = "";

        function text_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST['name'])) {
                $nameErr = "Name is required";
            } else {
                $name = text_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailErr = "Email is required";
            } else {
                $email = text_input($_POST["email"]);

                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailErr = "Inavalid email";
                }
            }

            if (empty($_POST["gender"])) {
                $genderErr = "gender is require";
            } else {
                $gender = text_input($_POST["gender"]);
            }

            if (empty($_POST["place"])) {
                $place = "";
            } else {
                $place = text_input($_POST["place"]);
            }
            $email = $_POST['email'];
        }
		?>
    	</form>
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name">
                    <span class="error">* <?php echo $nameErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>E-mail: </td>
                <td><input type="text" name="email" value="<?php echo $email; ?>">
                    <span class="error">* <?php echo $emailErr; ?></span>
                </td>
            </tr>

            <tr>
                <td>Place:</td>
                <td> <textarea name="place"></textarea></td>
            </tr>

            <tr>
                <td>Gender:</td>
                <td>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="male">Female</label><br>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="female">Male</label><br>
                    <!-- <span class="error">* <?php echo $genderErr; ?></span> -->
                </td>
			</tr>
			
            <tr>
                <td>
                    <input type="submit" name="submit" value="Submit">
                </td>
            </tr>
        </table>
		</div>
	</div>
</div>
<script>
	document.getElementByClassname('frame_ads_cont').contentWindow.document.body.innerHTML
</script>