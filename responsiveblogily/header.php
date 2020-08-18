<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package responsiveblogily
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<a class="skip-link screen-reader-text" href="#content">
		<?php _e('Skip to content', 'responsiveblogily'); ?></a>

	<div id="page" class="site">

		<header id="masthead" class="sheader site-header clearfix">
			<div class="content-wrap">

				<?php if (has_custom_logo()) : ?>

					<div class="site-branding branding-logo">
						<?php the_custom_logo(); ?>
					</div><!-- .site-branding -->

				<?php else : ?>

					<div class="site-branding">

						<?php if (is_front_page() && is_home()) : ?>
							<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<div class="word"> Welcome to my website</div>



							<div id="group_slider">
								<div class="blog-item">
									<div class="cont">
										<img src="<?php echo DF_IMAGE . '/Pinocchio.jpg'; ?>" class="d-block w-100" alt="img">
									</div>
									<div class="title">
										Pinocchio
									</div>
								</div>
								<div class="blog-item">
									<div class="cont">
										<img src="<?php echo DF_IMAGE . '/math.jpg' ?>" class="d-block w-100" alt="img">
									</div>
									<div class="title">
										Toán học
									</div>
								</div>
								<div class="blog-item">
									<div class="cont">
										<img src="<?php echo DF_IMAGE . '/science.jpg' ?>" class="d-block w-100" alt="img">
									</div>
									<div class="title">Khoa học</div>
								</div>
							</div>

							<div class="change_img">
								<button id="myBtn">Change image</button>

								<!-- The Modal -->
								<div id="myModal" class="modal1">

									<!-- Modal content -->
									<div class="modal-content1">
										<span class="close">&times;</span>
										<p>Do you want to change the image</p>
										<img src="<?php echo DF_IMAGE . '/change.jpg'; ?>" alt="img">
										<br>
										<button class='change_background' onclick="window.location.href = 'http://localhost/wordpress/wp-admin/customize.php?return=%2Fwordpress%2Fwp-admin%2Fwidgets.php&autofocus%5Bcontrol%5D=background_image';">Background</button>

									</div>
								</div>
							</div>



								<?php else : ?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
									<div class="word"> Hope you enjoy my website</div>

									<div class="change_img">
										<button id="myBtn">Change background image</button>

										<!-- The Modal -->
										<div id="myModal" class="modal1">

											<!-- Modal content -->
											<div class="modal-content1">
												<span class="close">&times;</span>
												<p>Do you want to change the image</p>
												<img src="<?php echo DF_IMAGE . '/change.jpg'; ?>" alt="img">
												<br>
												<button class='change_background2' onclick="window.location.href = 'http://localhost/wordpress/wp-admin/customize.php?return=%2Fwordpress%2Fwp-admin%2Fwidgets.php&autofocus%5Bcontrol%5D=background_image';">Background</button>
												<button class='change_image' onclick="window.location.href = 'http://localhost/wordpress/change-image/';">Image</button>
											</div>
										</div>
									</div>
									<!-- code a popup that show the info in front end and go to back end to change background image, using confirm in js -->
									<!-- <script type="text/javascript">
								var choose = confirm("Do you want to change your background photo ?");
								if (choose == true) {
									window.location.href = 'http://localhost/wordpress/wp-admin/customize.php?return=%2Fwordpress%2Fwp-admin%2Fwidgets.php&autofocus%5Bcontrol%5D=background_image';
								}
							</script> -->

									<!-- <div class="below">
								<ul class="navigate">
									<li><a href="#">Mới nhất</a></li>
									<li><a href="#">Thể loại</a>
										<ol class="genre">
											<li class="the_loai"><a href="#">Khoa học</a></li>
											<li class="the_loai"><a href="#">Nghệ thuật</a></li>
											<li class="the_loai"><a href="#">Văn hóa/Xã hội</a></li>
											<li class="the_loai"><a href="#">Lịch sử</a></li>
										</ol>
									</li>
									</li>
									<li><a href="#">Tác giả</a></li>
									<li><a href="#">BXH</a></li>
								</ul>
							</div> -->

								<?php
							endif;

							$description = esc_html(get_bloginfo('description', 'display'));
							if ($description || is_customize_preview()) : ?>
									<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
								<?php
							endif;
								?>

					</div><!-- .site-branding -->

				<?php
				endif;
				?>

			</div>

			<nav id="primary-site-navigation" class="primary-menu main-navigation clearfix">

				<a href="#" id="pull" class="smenu-hide toggle-mobile-menu menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'responsiveblogily'); ?></a>

				<div class="content-wrap text-center">
					<div class="center-main-menu">
						<?php
						wp_nav_menu(array(
							'theme_location'	=> 'menu-1',
							'menu_id'			=> 'primary-menu',
							'menu_class'		=> 'pmenu'
						));
						?>
					</div>
				</div>

			</nav><!-- #primary-site-navigation -->
			<div class="content-wrap">

				<div class="super-menu clearfix">
					<div class="super-menu-inner">
						<a href="#" id="pull" class="toggle-mobile-menu menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e('Menu', 'responsiveblogily'); ?></a>
					</div>
				</div>
			</div>
			<div id="mobile-menu-overlay"></div>

		</header>
		<!-- Image banner -->
		<?php if (get_header_image()) : ?>
			<div class="content-wrap below-nav-img">
				<img src="<?php echo esc_url((get_header_image())); ?>" alt="<?php echo (get_bloginfo('title')); ?>" />
			</div>
		<?php endif; ?>

		<!-- Image banner -->

		<div id="content" class="site-content clearfix">
			<div class="content-wrap">
				<div class="website-content">