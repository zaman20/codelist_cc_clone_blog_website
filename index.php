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
                <!-- content part -->
                <?php get_template_part('content'); ?>

               <!-- right side part -->
               <?php get_template_part('right-side'); ?>

            </div>
        </div>
    </div>

   <!-- footer -->
   <?php get_footer();?>

    <?php wp_footer();?>
</body>
</html>