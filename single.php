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
                            <span class="post-author">By Admin</span>
                            <span class="post-date"><?php the_date();?></span>
                            <span class="post-comment">Comments: <?php comments_number();?></span>
                            <span class="post-view">Views:<?php $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true ); echo $post_views_count;?></span>
                        </div>
                        <div class="post-content">
                            <?php the_post_thumbnail(); ?>
                        <p class="post-details"><?php the_content();?></p>

                        <p class="link-box">https://hxfile.co/1fnxi8nnmc2p
                            https://gofile.io/d/lE85oA
                            https://www.fireload.com/ea3196a9f7579f46/affiliateinfix-140.rar
                            https://www.europeup.com/jg8e1b5invik
                            https://drop.download/mib7uwidnos9
                            https://dl1.desiupload.to/rh4pm291rnwt
                            https://ddownload.com/gj5o4jmx766m
                            https://dbree.me/v/e6e4f0
                            https://bayfiles.com/vdL2Z0V0y9
                            https://anonfiles.com/w1L3Z8V0y2
                            https://1fichier.com/?h08fxew07epg1457pv84
                        </p>
                        <p class="credit">This file has UNTOUCHED status - (original developer code without any tampering done)</p>

                        </div>
                        
                        
                    </div>
                    <!--  -->

                    <!-- related articles -->
                    <div class="related-articles">
                        <h3 class="related-part-title">RELATED <strong>ARTICLES</strong></h3>
                        
                        <div class="recent-article-box">
                            <h3 class="post-title">Challan Pro v4.2.3</h3>
                            <p class="post-details">WooCommerce PDF Invoices and Packing Slips Pro (Challan Pro) help you to attach a PDF invoice to the order</p>
                            <div class="post-meta">
                                <span class="post-date">Feb 5, 2023</span>
                                <span class="post-comment">Comments: 0</span>
                                <span class="post-singlePagecategory">PLUGINS</span>
                            </div>
                        </div>
                        <div class="recent-article-box">
                            <h3 class="post-title">Challan Pro v4.2.3</h3>
                            <p class="post-details">WooCommerce PDF Invoices and Packing Slips Pro (Challan Pro) help you to attach a PDF invoice to the order</p>
                            <div class="post-meta">
                                <span class="post-date">Feb 5, 2023</span>
                                <span class="post-comment">Comments: 0</span>
                                <span class="post-singlePagecategory">PLUGINS</span>
                            </div>
                        </div>
                        <div class="recent-article-box">
                            <h3 class="post-title">Challan Pro v4.2.3</h3>
                            <p class="post-details">WooCommerce PDF Invoices and Packing Slips Pro (Challan Pro) help you to attach a PDF invoice to the order</p>
                            <div class="post-meta">
                                <span class="post-date">Feb 5, 2023</span>
                                <span class="post-comment">Comments: 0</span>
                                <span class="post-singlePagecategory">PLUGINS</span>
                            </div>
                        </div>
                    
                    </div>
                    <!-- related article closed -->
                   
                </div>


                <!-- right side part -->
               <?php get_template_part('right-side'); ?>
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