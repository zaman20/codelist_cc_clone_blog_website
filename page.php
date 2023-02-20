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
    <div class="content-area">
       <div class="container">
            <div class="content-part">
                <h3 class="page-title"><?php the_title();?></h3>
                <!-- content part -->
                <?php the_content(); ?>
            </div>
               

            <!-- right side part -->
            <?php get_template_part('trending'); ?>
        </div> 
    </div>

   .<!-- footer -->
   <?php get_footer();?>

    <?php wp_footer();?>
</body>
</html>