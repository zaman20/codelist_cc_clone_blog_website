<!-- content part -->
<?php $my_options = get_option('my_option');?>
<div class="content-part">
    <div class="add-part-top">
    
    <?php echo $my_options['opt-code-editor-1'];?>
    </div>
    <h3 class="content-part-title">Recently added <strong>Files</strong></h3>

    <?php if(have_posts()){
    while(have_posts()):the_post();?>
    <a href="<?php the_permalink();?>">
        <div class="content-box">
            <div class="post-image">
                <?php the_post_thumbnail();?>
            </div>


            <h3 class="post-title"><?php the_title();?></h3>
            <div class="post-details"><?php echo wp_trim_words(get_the_content(),10); ?></div>
            <div class="post-meta">
                <span class="post-category"><?php $cat = get_the_category(); echo $cat[0]->cat_name;?></span>
                <span class="post-date"><?php the_date();?></span>
                <span class="post-comment">Comments: <?php comments_number();?></span>
                <span class="post-view">Views:
                    <?php $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true ); echo $post_views_count;?></span>
            </div>
        </div>
    </a>
    <?php endwhile; }?>
    <div class="pagination">
        <?php  the_posts_pagination(array(
            'prev_text' => 'Previous',
            'next_text' => 'Next',
        ));?>
    </div>
</div>