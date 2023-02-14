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
                        <input type="text" name="bycontent" placeholder="by content"
                        value="<?php echo isset($_GET['bycontent'])? $_GET['bycontent']:'' ?>">
                        <input type="text" name="byuser" placeholder="by username"
                        value="<?php echo isset($_GET['byuser'])? $_GET['byuser']:'' ?>">
                        <select name="category" id="">
                            <?php foreach($cats as $cat):?>
                                <option <?php if(isset($_GET['category']) && ( $_GET['category'] == $cat->slug)): ?>
                                selected <?php endif;?>
                                value="<?php echo $cat->slug?>"><?php echo $cat->name?></option>
                            <?php endforeach;?>
                        </select>
                        <input type="submit" value="submit">
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
    if($query->have_posts()):
        while($query->have_posts()):$query->the_post();
        //echo" result ase";
        the_title();
        endwhile;
        else: echo "result nai";
    
    endif;
endif;?>






                    <div class="regis-notice">
                        <p>.</p>
                    </div>
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