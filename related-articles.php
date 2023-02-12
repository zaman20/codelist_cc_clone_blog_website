<div class="related-articles">
    <h3 class="related-part-title">RELATED <strong>ARTICLES</strong></h3>
    <?php  $related = get_posts( array( 
                        'category__in' => wp_get_post_categories($post->ID), 
                        'numberposts' => 5,
                        'post__not_in' => array($post->ID) 
                        ) );

                        if( $related ) foreach( $related as $post ) {
                            setup_postdata($post);?>

            <a href="<?php the_permalink();?>">                    
                <div class="recent-article-box">
                    <h3 class="post-title"><?php the_title();?></h3>
                    <p class="post-details"><?php echo wp_trim_words(get_the_content(),15);?></p>
                    <div class="post-meta">
                        <span class="post-date"><?php the_date();?></span>
                        <span class="post-comment">Comments:<?php comments_number();?></span>
                        <span class="post-singlePagecategory"><?php $cat = get_the_category(); echo $cat[0]->cat_name;?></span>
                    </div>
                </div>
            </a>

<?php } wp_reset_postdata(); ?>


</div>