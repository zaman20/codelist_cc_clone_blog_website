 <!-- right side -->
 <div class="right-side-part">
     <!-- recent-post -->
     <div class="recent-post-box">
         <h4 class="recent-post-title">Trending <strong>Now</strong></h4>
         <!-- content -->
         <?php  query_posts('meta_key=post_views_count&posts_per_page=5&orderby=meta_value_num&
    order=DESC');
          if(have_posts()):while(have_posts()):the_post(); ?>
            <div class="recent-post-content-box">
                <div class="rpcb-content">
                    <h5 class="rpcb-title"><?php the_title();?></h5>
                    <span class="rpcb-meta-date"><?php the_date();?></span>
                    <span class="rpcb-meta-time">17:31</span>
                    <span class="rpcb-meta-comment"><?php comments_number();?></span>
                </div>
                <?php the_post_thumbnail();?>
            </div>
         <?php endwhile;endif; wp_reset_query(); ?>

         <!-- <div class="recent-post-content-box">
             <div class="rpcb-content">
                 <h5 class="rpcb-title">Cloud Chat 3 v3.1.1 - Fully SaaS Live Support Chat - nulled</h5>
                 <span class="rpcb-meta-date">31-Jan,2023</span>
                 <span class="rpcb-meta-time">17:31</span>
                 <span class="rpcb-meta-comment">1</span>
             </div>
             <img src="<?php echo get_template_directory_uri()?>/img/rps.jpg" alt="" class="rpcb-img">
         </div>
         <div class="recent-post-content-box">
             <div class="rpcb-content">
                 <h5 class="rpcb-title">Cloud Chat 3 v3.1.1 - Fully SaaS Live Support Chat - nulled</h5>
                 <span class="rpcb-meta-date">31-Jan,2023</span>
                 <span class="rpcb-meta-time">17:31</span>
                 <span class="rpcb-meta-comment">1</span>
             </div>
             <img src="<?php echo get_template_directory_uri()?>/img/rps.jpg" alt="" class="rpcb-img">
         </div>
         <div class="recent-post-content-box">
             <div class="rpcb-content">
                 <h5 class="rpcb-title">Cloud Chat 3 v3.1.1 - Fully SaaS Live Support Chat - nulled</h5>
                 <span class="rpcb-meta-date">31-Jan,2023</span>
                 <span class="rpcb-meta-time">17:31</span>
                 <span class="rpcb-meta-comment">1</span>
             </div>
             <img src="<?php echo get_template_directory_uri()?>/img/rps.jpg" alt="" class="rpcb-img">
         </div> -->
         <!-- end content -->
     </div>
 </div>
 <!-- right side close -->