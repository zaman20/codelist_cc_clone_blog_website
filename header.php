<div class="header">
<?php $my_options = get_option('my_option');?>
        <!-- top-bar-pc -->
        <div class="top-bar">
                <div class="logo-area">
                    <i class="fa-solid fa-bars open-menu"></i>
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
                        <!-- <ul>
                            <li><a href="">CMS & Ecoomerce </a>
                               
                                    <ul>
                                        <li><a href="">Ecommerce</a>
                                            <ul>
                                                <li><a href="">a</a></li>
                                                <li><a href="">a</a></li>
                                                <li><a href="">b</a></li>
                                                <li><a href="">c</a></li>
                                                <li><a href="">d</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Others</a>
                                            <ul>
                                                <li><a href="">a</a></li>
                                                <li><a href="">a</a></li>
                                                <li><a href="">b</a></li>
                                                <li><a href="">c</a></li>
                                                <li><a href="">d</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="">Cms Template</a></li>
                                    </ul> 
                            </li>
                        </ul> -->
                    </div>

                    
                   
                </div>
                <!-- right side are -->
                <div class="login-area">
                    <a href="#" class="register-btn"><i class="fa-solid fa-arrow-right "></i>Register</a>
                    <p>Welcome, <strong>guest</strong></p>
                    <a href="#" class="search-icon"><i class="fa-solid fa-magnifying-glass"></i></a>
                    <a href="#" class="search-icon-off"><i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
        </div>
        <!-- top-bar-phone -->
        <div class="top-bar-phone">
            <div class="logo-area">
                <a href="<?php echo home_url();?>">
                    <img src="img/logo.png" alt="logo">
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
        <!-- <form action="" class="search-form">
            <input type="text" class="search-box" placeholder="SEARCH HERE">
            <input type="submit" class="search-btn" value="SEARCH NOW">
        </form> -->
    </div>
    <!-- sidebar menu -->
    <div class="sidebar">
        <div class="close-icon"><i class="fa-solid fa-circle-xmark"></i></div>
        <div class="sidebar-logo">
            <a href="<?php echo home_url();?>">
                <img src="<?php echo $my_options['opt-logo'];?>" alt="">
            </a>
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
    </div>