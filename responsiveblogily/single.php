<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package responsiveblogily
 */

get_header(); ?>

	<div id="primary" class="featured-content content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) : the_post();
			$author_id = 0;
			echo ("Author: " . get_the_author_meta('display_name', $author_id));
			echo ("<br>");
			set_post_view(); //store view into db
			echo (get_post_view()); // watch the views that were counted
			echo ("<br>");
			
			
			
			get_template_part( 'template-parts/content', 'single' );
			

			//the_post_navigation();

			//responsiveblogily_related_posts();
			

			// If comments are open or we have at least one comment, load up the comment template.
		?>
		
		<div class="comment_views">
		<?php
			$post_id = 0;
			echo (get_comments_number($post_id) . " comments"); //count comments
		?>
		</div>
		<?php
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
