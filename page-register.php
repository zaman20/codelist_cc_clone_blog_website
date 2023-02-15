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

         <div class="content-part">

                    <h3 class="registration-title">Site <strong>Registration</strong></h3>

                    <div class="regis-notice">
                        <p>Registering on our site will allow you full membership access. You will be able to post comments, read hidden text and more. Registration requires e-mail verification. In case of any problems please contact our site admins.</p>
                    </div>
                    <!-- content part -->
                    <?php echo do_shortcode('[ultimatemember form_id="5"]');?>
         </div>
         
        <!-- right side part -->
        <?php get_template_part('trending'); ?>
        
    </div>

   .<!-- footer -->
   <?php get_footer();?>

    <?php wp_footer();?>
</body>
</html>