<?php customSetPostViews(get_the_ID());//single.php ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name');?>

</title>
    <!-- font-awesome -->
  <?php wp_head();?>
</head>
<body>
  <?php get_header();?>
    <!-- body content -->
    <div class="container content-area">
        <div class="row">
            <div class="col-lg-12">
                <!-- content part -->
                <div class="content-part">
                    <div class="top-part-single">
                       <p class="category-track"><a href="<?php echo home_url();?>"> Codelist.cc</a>>>
                       <?php the_category();?></span>  >> <span class="title-meta"><?php the_title();?></span>
                        </p>
                    </div>
                    <!-- single content box -->
                    <div class="single-content-box">
                        <h3 class="single-post-title"><?php the_title();?></h3>
                        <div class="post-meta">
                            <span class="post-author">By <?php  the_author();?></span>
                            <span class="post-date"><?php the_date();?></span>
                            <span class="post-comment">Comments: <?php comments_number();?></span>
                            <span class="post-view">Views:<?php $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true ); echo $post_views_count;?></span>
                        </div>
                        <div class="post-content">
                            <?php the_post_thumbnail(); ?>
                        <p class="post-details"><?php the_content();?></p>
                        <p class="link-box"><?php the_field('links_box');?></p>
                        <p class="credit"><?php the_field('bottom_text');?></p>

                        </div>
                        
                        
                    </div>
                    <!--  -->

                    <!-- related articles -->
                        <?php
                            $related = get_posts( array( 
                            'category__in' => wp_get_post_categories($post->ID), 
                            'numberposts' => 5,
                            'post__not_in' => array($post->ID) 
                            ) );
                        if( $related ) foreach( $related as $post ) {
                        setup_postdata($post); ?>
                        
                        <?php }
                        wp_reset_postdata(); ?>

                  <?php get_template_part('related-articles');?>
                    <!-- related article closed -->
                    <?php comments_template(''); ?>
                </div>


                <!-- right side part -->
               <?php get_template_part('trending'); ?>
                <!-- right side close -->

            </div>
        </div>
    </div>

    <!-- footer -->
    <?php get_footer();?>
    <!-- footer closed-->

    <?php wp_footer();?>
</body>
</html>