<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package responsiveblogily
 */

?>
</div>
</div><!-- #content -->
</div>
<footer id="colophon" class="site-footer clearfix">

	<div class="content-wrap">
		<?php if (is_active_sidebar('footerwidget-1')) : ?>
			<div class="footer-column-wrapper">
				<div class="footer-column-three footer-column-left">
					<div class="choose">
						<label for="choose">Category:</label>
						<select name="category">
							<option value="khoa_hoc">Khoa học</option>
							<option value="nghe_thuat">Nghệ thuật</option>
							<option value="lich_su">Lịch sử</option>
							<option value="van_hoa">Văn hóa</option>
						</select>
					</div>
					<?php dynamic_sidebar('footerwidget-1'); ?>

				</div>
			<?php endif; ?>

			<?php if (is_active_sidebar('footerwidget-2')) : ?>
				<div class="footer-column-three footer-column-middle">
					<?php dynamic_sidebar('footerwidget-2'); ?>
				</div>
			<?php endif; ?>

			<?php if (is_active_sidebar('footerwidget-3')) : ?>
				<div class="footer-column-three footer-column-right">
					<?php dynamic_sidebar('footerwidget-3'); ?>
				</div>
			<?php endif; ?>

			</div>

			<div class="site-info">
				<div class="contact">
					<div>Contact</div>
					<br>
					<div class="button_contact">
						<button onclick="window.location.href='https://www.facebook.com/'"  class="button_cont"><i class="fa fa-facebook"></i></button>
						<button onclick="window.location.href='https://www.twitter.com/'" class="button_cont"><i class="fa fa-twitter"></i></button>
						<button onclick="window.location.href='https://www.instagram.com/'" class="button_cont"><i class="fa fa-instagram"></i></button>
						<button onclick="window.location.href='https://www.pinterest.com/'"class="button_cont"><i class="fa fa-pinterest"></i></button>
					</div>
				</div>
				<br>
				&copy;<?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?>
				
				<!-- Delete below lines to remove copyright from footer -->
				<span class="footer-info-right">
					<?php echo esc_html__(' | Built using WordPress and', 'responsiveblogily') ?> <a rel="nofollow" href="<?php echo esc_url('https://superbthemes.com/responsiveblogily/', 'responsiveblogily'); ?>"><?php echo esc_html__('Responsive Blogily', 'responsiveblogily') ?></a> <?php echo esc_html__('theme by Superb', 'responsiveblogily') ?>
				</span>
				<!-- Delete above lines to remove copyright from footer -->
			</div><!-- .site-info -->
	</div>



</footer><!-- #colophon -->
</div><!-- #page -->

<div id="smobile-menu" class="mobile-only"></div>
<div id="mobile-menu-overlay"></div>

<?php wp_footer(); ?>
</body>

</html>