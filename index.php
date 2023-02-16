<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo bloginfo('name')?></title>
 
    <?php wp_head();?>
</head>
<body>
    
    <!-- header -->
    <?php get_header();?>

    <!-- body content -->
    <div class="container">
        <div class="content-area">
            <!-- content part -->
            <?php get_template_part('content'); ?>

            <!-- right side part -->
            <?php get_template_part('trending'); ?>
        </div>
    </div>

   .<!-- footer -->
   <?php get_footer();?>

    <?php wp_footer();?>
</body>
</html>