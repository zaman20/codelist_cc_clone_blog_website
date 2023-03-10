<div class="header">
<?php $my_options = get_option('my_option');?>
        <!-- top-bar-pc -->
        <div class="container">
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
                        <nav>
                            <?php wp_nav_menu(array('theme_location'=>'Register Menu'));?>
                        </nav>
                        <p>Welcome,</p>
                        <nav><?php wp_nav_menu(array('theme_location'=>'User Menu'));?></nav>
                        <!-- <ul>
                            <li><a href="">guest</a></li>
                        </ul> -->
                        <a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                        <a href="#" class="search-icon-off"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
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
                <li><a href="#" class="search-icon">search<i class="fa-solid fa-magnifying-glass"> </i></a></li>
                <li><a href="#" class="search-icon-off">search<i class="fa-solid fa-magnifying-glass"> </i></a></li>
               <li><a href="#" class="open-menu">Menu</a><span class="material-symbols-outlined open-menu">menu</span></li>
               <li><a href="#" class="loginBtn"><i class="fa-solid fa-user userIcon"></i></a></li>
            </div>
            <div class="menu-area phone">
                <li><a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass"> </i></a></li>
                <li><a href="#" class="search-icon-off"><i class="fa-solid fa-magnifying-glass"> </i></a></li>
                <li><a href="#" class="open-menu"></a><span class="material-symbols-outlined open-menu">menu</span></li>
                <li><a href="#" class="loginBtn"><i class="fa-solid fa-user userIcon"></i></a></li>
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


            <!-- sidebar script menu -->
            <div class="sidebar-other sidebarall">
                <p class="sidebar-title">Script</p>  
        
                <div class="other-menu-s">
                <nav>
                <?php wp_nav_menu(array('theme_location'=>'Sidebar Script Menu'));?>
                </nav>
                </div>
            </div>

            <!-- sidebar wordpress menu -->
            <div class="sidebar-wordpress sidebarall">
                <p class="sidebar-title">Wordpress</p>  
                <div class="other-menu-w">
                <nav>
                <?php wp_nav_menu(array('theme_location'=>'Sidebar Wordpress Menu'));?>
                </nav>
                </div>
            </div>

            <!-- sidebar mobile menu -->
            <div class="sidebar-mobile sidebarall">
                <p class="sidebar-title">Mobile</p>  
                <div class="other-menu-m">
                <nav>
                <?php wp_nav_menu(array('theme_location'=>'Sidebar Mobile Menu'));?>
                </nav>
                </div>
            </div>

             <!-- sidebar cms menu -->
            <div class="sidebar-cms sidebarall">
                <p class="sidebar-title-cms">CMS & Ecommerce</p>  
                <div class="other-menu2">   
                    <nav >
                        <?php wp_nav_menu(array('theme_location'=>'Sidebar CMS Menu'));?>
                        <!-- <ul >
                                <li ><a href="">Ecommerce</a>
                                    <ul class="dropdown">
                                        <li><a href="">j</a></li>
                                        <li><a href="">j</a></li>
                                        <li><a href="">j</a></li>
                                        <li><a href="">j</a></li>
                                    </ul>
                                </li>
                                <li class="ecommerce"><a href="">Others</a>
                                    <ul class="dropdown">
                                        <li><a href="">k</a></li>
                                        <li><a href="">k</a></li>
                                        <li><a href="">k</a></li>
                                        <li><a href="">k</a></li>
                                    </ul></li>
                                <li><a href="">CMS</a></li>
                        </ul>  -->
                    </nav>
                </div>  
            </div>

              <!-- sidebar other menu -->
              <div class="sidebar-script sidebarall">
                <p class="sidebar-title">Others</p>  
                <div class="other-menu">
                <nav>
                    <?php wp_nav_menu(array('theme_location'=>'Sidebar Other Menu'));?>
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
                <a href="#" class="login-register-btn loginBtn" ><i class="fa-solid fa-user"></i>Login/Sign Up</a>
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