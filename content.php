<!-- content part -->
<div class="content-part">
                    <div class="add-part-top">
                        <img src="<?php echo get_template_directory_uri()?>/img/Screenshot 2023-02-05 173658.png" alt="">
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
                        <div class="post-details"><?php the_content() ;?></div>
                        <div class="post-meta">
                            <span class="post-category"><?php $cat = get_the_category(); echo $cat[0]->cat_name;?></span>
                            <span class="post-date"><?php the_date();?></span>
                            <span class="post-comment">Comments: <?php comments_number();?></span>
                            <span class="post-view">Views:  <?php $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true ); echo $post_views_count;?></span>
                        </div>
                </div>
            </a>
<?php endwhile;            }?>
                    <!-- <div class="content-box">
                        
                        <h3 class="post-title">Challan Pro v4.2.3</h3>
                        <p class="post-details">WooCommerce PDF Invoices and Packing Slips Pro (Challan Pro) help you to attach a PDF invoice to the order</p>
                        <div class="post-meta">
                            <span class="post-category">PLUGINS</span>
                            <span class="post-date">Feb 5, 2023</span>
                            <span class="post-comment">Comments: 0</span>
                            <span class="post-view">Views: 19</span>
                        </div>
                    </div>
                    <div class="content-box">
                        <img src="<?php echo get_template_directory_uri()?>/img/1536993925_dv-team.jpg" alt="post-image" class="post-image">
                        <h3 class="post-title">Challan Pro v4.2.3</h3>
                        <p class="post-details">WooCommerce PDF Invoices and Packing Slips Pro (Challan Pro) help you to attach a PDF invoice to the order</p>
                        <div class="post-meta">
                            <span class="post-category">PLUGINS</span>
                            <span class="post-date">Feb 5, 2023</span>
                            <span class="post-comment">Comments: 0</span>
                            <span class="post-view">Views: 19</span>
                        </div>
                    </div>
                    <div class="content-box">
                        <img src="<?php echo get_template_directory_uri()?>/img/1536993925_dv-team.jpg" alt="post-image" class="post-image">
                        <h3 class="post-title">Challan Pro v4.2.3</h3>
                        <p class="post-details">WooCommerce PDF Invoices and Packing Slips Pro (Challan Pro) help you to attach a PDF invoice to the order</p>
                        <div class="post-meta">
                            <span class="post-category">PLUGINS</span>
                            <span class="post-date">Feb 5, 2023</span>
                            <span class="post-comment">Comments: 0</span>
                            <span class="post-view">Views: 19</span>
                        </div>
                    </div> -->
                </div>