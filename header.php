<div class="header">
<?php $my_options = get_option('my_option');?>
        <!-- top-bar-pc -->
        <div class="top-bar">
                <div class="logo-area">
                    <span class="material-symbols-outlined open-menu"> menu </span>
                    <!-- <i class="fa-solid fa-bars open-menu"></i> -->
                    <a href="<?php echo home_url();?>">
                        <img src="<?php echo $my_options['opt-logo'];?>" alt="">
                    </a>
                </div>
                <div class="menu-area">
                    <div class="g-menu">
                        <?php wp_nav_menu(array('theme_location'=>'Header Menu'));?>
                    </div>
                    
                    <div class="mega-menu">
                        <?php wp_nav_menu(array('theme_location'=>'Mega Menu')); ?>
                   
                    </div>

                    
                   
                </div>
                <!-- right side are -->
                <div class="login-area">
                    <a href="<?php echo home_url();?>/register/" class="register-btn"><i class="fa-solid fa-arrow-right "></i>Register</a>
                    <p>Welcome, <strong>guest</strong></p>
                    <a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#" class="search-icon-off"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
        </div>
        <!-- top-bar-phone -->
        <div class="top-bar-phone">
            <div class="logo-area">
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo $my_options['opt-logo'];?>" alt="logo" >
                </a>
            </div>
            <div class="menu-area tab">
                <a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass"> search</i></a>
                <a href="#" class="search-icon-off"><i class="fa-solid fa-magnifying-glass"> search</i></a>
               <i class="fa-solid fa-bars open-menu"> Menu</i>
            </div>
            <div class="menu-area phone">
                <a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#" class="search-icon-off"><i class="fa-solid fa-magnifying-glass"></i></a>
               <i class="fa-solid fa-bars open-menu"></i>
            </div>
           
          
    </div>
    </div>
    <!-- search bar -->
    <div class="search-bar">
        <?php get_search_form();?>
        <a href="<?php echo home_url('/advancedsearch');?>" class="advanced-search">Advanced Search</a>
    </div>
    <!-- sidebar menu -->
   
    <div class="sidebar">
            <div class="close-icon"><i class="fa-solid fa-circle-xmark"></i></div>
            <div class="sidebar-logo">
                <a href="<?php echo home_url();?>">
                    <img src="<?php echo $my_options['opt-logo'];?>" alt="">
                </a>
                <a href="<?php echo $my_options['opt-fb'];?>" taget="__blank">
                <i class="fa-brands fa-facebook-f"></i></a>
            </div>
        
            <div class="sidebar-menu">
            <?php wp_nav_menu(array('theme_location'=>'Sidebar Menu'));
                        ?>
            </div>
            <div class="sidebar-other">
            <p>Others</p>  
                <span><i class="fa-solid fa-caret-down "></i></span>
                <span class="off"><i class="fa-solid fa-caret-up "></i></span>
                <div class="other-menu">
                <nav>
                <?php wp_nav_menu(array('theme_location'=>'Others Menu'));?>
                </nav>
                </div>
            </div>
            <!-- monthly  -->
            <div class="monthly-box">
                <h2>Monthly Popular</h2>
             <?php dynamic_sidebar('home-1');?>
                
            </div>

            <!-- login logout -->
            <div class="login-logout">
                <a href="#" class="login-register-btn" ><i class="fa-solid fa-user"></i>Login/Sign Up</a>
            </div>
    </div>
    
    <!-- login-form -->
    <div class="login-form">
        <span class="close-menu-icon"><i class="fa-solid fa-circle-xmark"></i></span>
        <h3 class="login-title">Login here</h3>
        <?php echo do_shortcode('[ultimatemember form_id="6"]');?>
        <a href="<?php echo home_url();?>/password-reset" class="lgpage-create-ac">Lost Password</a>
        <a href="<?php echo home_url();?>/register" class="lgpage-create-ac">Create New Account</a>
    </div>