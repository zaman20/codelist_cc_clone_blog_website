<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name')?></title>
 
    <?php wp_head();?>
</head>
<body>
    
    <!-- header -->
    <?php get_header();?>

    <!-- body content -->
    <div class="container content-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-part">

                <h3 class="registration-title">Search <strong>Result</strong></h3>


                <?php $cats = get_terms([
                            'taxonomy'=>'category',
                            'hide_empty'=>false,
                        ]);?>
<?php $is_search = count($_GET);?>
                <div class="search-box">

                    <form action="<?php echo home_url('/advancedsearch')?>" method="get">
                    <div class="left-side">
                        <label for="">Search by content</label>
                        <input type="text" name="bycontent"
                        value="<?php echo isset($_GET['bycontent'])? $_GET['bycontent']:'' ?>">
                        <input type="checkbox"><span >Exact match of all word</span>
                        <label for=""></label>
                    </div>


                    <div class="right-side">
                        <label for="">Search by username</label>
                        <input type="text" name="byuser"
                        value="<?php echo isset($_GET['byuser'])? $_GET['byuser']:'' ?>">
                        
                        <input type="checkbox"><span>Exact Name</span>
                        <label for=""></label>
                    </div>

                    <div class="full">
                            <select name="" id="">
                                <option value="">Search in articles</option>
                            </select>
                    </div>
                       
                    <div class="left-side">
                        <label for="">Find Articles with</label>
                        <select name="" id="">
                            <option value="">No less than</option>
                            <option value="">No more than</option>
                        </select>
                        <input type="text" value="0">

                        <label for="">Time Period</label>
                        <select name="" id="">
                            <option value="">For all time</option>
                            <option value="">Since the last visit</option>
                            <option value="">A day ago</option>
                            <option value="">1 week ago</option>
                            <option value="">2 weeks ago</option>
                        </select>
                        <select name="" id="">
                            <option value="">and later</option>
                            <option value="">and earlier</option>
                        </select>

                        <label for="">Sorts search result by</label>
                        <select name="" id="">
                            <option value="">Article or comment date</option>
                            <option value="">Article title</option>
                            <option value="">Number of comments</option>
                            <option value="">Number of views</option>
                            <option value="">Author's name</option>
                            <option value="">Category</option>
                            <option value="">Author's rating</option>
                        </select>
                        <select name="" id="">
                            <option value="">Descending</option>
                            <option value="">Ascending</option>
                        </select>
                        <label for=""></label><br>
                        <span class="shows">Show result as</span>
                        <input type="radio" value='1' name="result" checked><span>Articles</span> 
                        <input type="radio" value='2' name="result"><span>Titles</span> 
                        <label for=""></label>
                    </div>

                    <div class="right-side">
                        <label for="">Search By category</label>
                        <div class="cat-box">
                            <ul>
                              <li <?php   if(empty($_GET['category'])):?> id="active" <?php endif;?> class="catlist" >
                                <a href="#" >--Search in all sections--</a>
                             </li>

                              <?php foreach($cats as $cat):?>
                                <li <?php if(isset($_GET['category']) && ( $_GET['category'] == $cat->slug)): ?> 
                                    id="active"<?php endif;?> data-slug="<?php echo $cat->slug;?>" class="catlist" >
                                    <a href="#" >
                                    <?php echo $cat->name;?>
                                </a></li>
                              <?php endforeach;?>
                            </ul>
                           
                        </div>
                        <input type="hidden" id="catName" name="category" value="">
                       
                    </div>


                <div class="full"> 
                    <input type="submit" value="Start Search" class="button" >
                    <a href="" class="button" >Stop</a>
                    <a href="<?php echo home_url('/advancedsearch');?>" class="button"  >Reset</a>
                    
                </div>

                       
                    </form>
                </div>
                    







                <?php $args = [
                        'post_type'=>'post',
                        'post_per_page'=>0,
                        'tax_query'=>[],
                        'meta_query'=>[
                            'relation'=>'AND',
                        ],
                ];
                
                if(isset($_GET['bycontent'])){
                    if(!empty($_GET['bycontent'])){
                        $args['s']= $_GET['bycontent'];
                    }
                }




        if(isset($_GET['category'])){
                        if(!empty($_GET['category'])){
                            $args['tax_query'][]=[
                                'taxonomy'=>'category',
                                'field'=>'slug',
                                'terms'=>array($_GET['category']),
                            ];
                        }
                    }

        if($is_search):
                    $query = new WP_Query($args);
        endif; ?>

<?php if($is_search):
$count =0;
    if($query->have_posts()):
        while($query->have_posts()):$query->the_post();
        $count++;
    endwhile;endif;
        ?>
        <div class="regis-notice">
            <?php echo "For this query found Result: ". $count;?>
        </div>


<?php    if($query->have_posts()):
        while($query->have_posts()):$query->the_post();?>
        <?php if($_GET['result']==1):?>
            <!-- articles show -->
            <a href="<?php the_permalink();?>">
                <div class="content-box">
                    <div class="post-image">
                        <?php the_post_thumbnail();?>
                    </div>


                    <h3 class="post-title"><?php the_title();?></h3>
                    <div class="post-details"><?php echo wp_trim_words(get_the_content(),25); ?></div>
                    <div class="post-meta">
                        <span class="post-category"><?php $cat = get_the_category(); echo $cat[0]->cat_name;?></span>
                        <span class="post-date"><?php the_date();?></span>
                        <span class="post-comment">Comments: <?php comments_number();?></span>
                        <span class="post-view">Views:
                            <?php $post_views_count = get_post_meta( get_the_ID(), 'post_views_count', true ); echo $post_views_count;?></span>
                    </div>
                </div>
            </a>
            <?php else:?>
                <!-- title show -->
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
            <?php endif;?>
<?php     endwhile;

        
    
  endif;
endif;?>






                    
                </div>
                

               <!-- right side part -->
               <?php get_template_part('trending'); ?>

            </div>
        </div>
    </div>

   .<!-- footer -->
   <?php get_footer();?>

    <?php wp_footer();?>
</body>
</html>