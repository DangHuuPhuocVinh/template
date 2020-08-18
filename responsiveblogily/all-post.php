<?php 
    /**
     * Template Name: All post
     */
?>

<?php get_header(); ?>
<?php 

$wp_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 
<?php if ( $wp_all_query->have_posts() ) : ?>
<div class="all_posts">
<ul>
    <?php while ( $wp_all_query->have_posts() ) : $wp_all_query->the_post(); ?>
    <div class="all_posts_cont">
        <div><?php if(has_post_thumbnail() ){
        the_post_thumbnail();
        }
         ?></div>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        </div>
    <?php endwhile; ?>
</ul>
</div> 
    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>