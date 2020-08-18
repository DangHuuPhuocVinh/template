<?php
if (!function_exists( 'pagination' )){
function pagination(){
    if ( $GLOBALS['wp_query'] -> max_num_pages < 2 )
    { return ''; 
    } ?>
        <nav class="pagination" role="navigation">
            <?php if ( get_next_posts_link() ) : ?>
                <div><?php next_posts_link( __('Older Posts', 'web') ); ?></div>
            <?php endif; ?>
            <?php if ( get_previous_posts_link() ) :?>
                <div ><?php previous_posts_link(__('Newest Posts', 'web') ); ?></div>
            <?php endif; ?>
        </nav>
 }
}

<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

<?php endwhile; ?>
<?php pagination(); ?>