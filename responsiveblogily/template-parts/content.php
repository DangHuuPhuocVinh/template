<?php

/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package responsiveblogily
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('posts-entry fbox blogposts-list'); ?>>
	<?php if (has_post_thumbnail()) : ?>
		
		<div class="featured-thumbnail">
			<!-- phan loai category bai post theo mau, em lam de biet vi tri post nhu the nao ạ -->
			<?php $post_tag = get_the_tags();
			
			foreach ($post_tag as $tag) {
				if ($tag->name === "khoa học") { ?>
					<div class="line_sci">Hey</div>
				<?php } else if ($tag->name === "nghệ thuật") { ?>
					<div class="line_art">Hey</div>
				<?php } else if ($tag->name === "lịch sử") { ?>
					<div class="line_history">Hey</div>
				<?php } else if ($tag->name === "văn hóa") { ?>
					<div class="line_culture">Hey</div>
			<?php }
			} ?>
			
			<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail('responsiveblogily-slider'); ?></a>

		</div>
	<?php endif; ?>
	<button class="back_to_top_btn"><i class="fa fa-arrow-up"></i></button>
	<header class="entry-header">
		<?php
		if (is_singular()) :
			the_title('<h1 class="entry-title">', '</h1>');
		else :
			the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
		endif;
		
		if ('post' === get_post_type()) : ?>
			<div class="entry-meta">
				<div class="blog-data-wrapper">
					<div class="post-data-divider"></div>
					<div class="post-data-positioning">
						<div class="post-data-text">
							<?php echo (responsiveblogily_posted_on() . "<br>"); ?>
							<?php echo (the_tags()); ?>
						</div>
					</div>
				</div>
			</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_excerpt(sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'responsiveblogily'),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		));

		
		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html__('Pages:', 'responsiveblogily'),
			'after'  => '</div>',
		));
		?>
		
		<div class="views_post">
		<?php echo (get_post_view()); ?>
		</div>

		<div class="text-center">
			<a href="<?php the_permalink() ?>" class="blogpost-button"><?php echo __('want to read ?', 'responsiveblogily') ?></a>
		</div>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->