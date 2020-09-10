<?php // get the science post ?>
<?php 
$science = array(
    'post_type' => 'post', 
    'post_status' => 'publish', 
    'category_name' => 'khoa-hoc' ,
    'posts_per_page' => 0
);
$wp_all_query2 = new WP_Query($science); ?>

 <div class="sci_cont">
    <?php while ($wp_all_query2->have_posts()) : $wp_all_query2->the_post(); ?>
         <div class="sci_frame">
             <?php if (has_post_thumbnail()) {  ?>
                <div class="sci_img">
                <li><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a></li>
                </div>
                <div class="sci_post">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
             <?php } ?>
         </div>
     <?php endwhile; ?>
 </div>

 <div id="data"></div>
 <br>

 <?php  
$art = array(
    'post_type' => 'post', 
    'post_status' => 'publish', 
    'category_name' => 'nghe-thuat' ,
    'posts_per_page' => 0
);
$wp_all_query2 = new WP_Query($art); ?> 

 <div class="art_cont">
     <?php while ($wp_all_query2->have_posts()) : $wp_all_query2->the_post(); ?>
         <div class="art_post">
             <?php if (has_post_thumbnail()) {  ?>
                 <li><a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>"></a></li>

                 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
             <?php } ?>
         </div>
     <?php endwhile; ?>
 </div>
<br>