<?php 
    /**
     * Template Name: All post
     */
?>

<?php get_header(); ?>
<?php 

$wp_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=> 0)); ?>
 
<?php if ( $wp_all_query->have_posts() ) : ?>
<div class="all_posts">
<ul>
    <div class="all_cont">
        <div class="row">
        <?php while ( $wp_all_query->have_posts() ) : $wp_all_query->the_post(); ?>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 col-custom">
                <?php if(has_post_thumbnail() ){  ?>
                <li><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a></li>
                
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php }
                ?>
                
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</ul>
</div> 

    <?php wp_reset_postdata(); ?>
 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>