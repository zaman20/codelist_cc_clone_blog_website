 <!-- footer -->
<div class="footer-part">
    <div class="container">
        <div class="footer-content">
            <div class="footer-left">
                <i class="fa-solid fa-ellipsis"></i>
                <span class="footer-logo">WPFREE<b>SCRIPT</b></span>
            </div>
            <div class="footer-right">
            <?php $my_options = get_option('my_option');?>
                <p><?php echo  $my_options['opt-text'];?></p>
            </div>
            <div class="footer-divider"></div>
    
            <div class="footer-left">
                <p class="copyright-text">Copyright © 2023 - WPFREESCRIPT ❤️<a href="https://www.facebook.com/ZamanAdor20/">ZASOFT</a> </p>
            </div>
            <div class="footer-right">
                <?php wp_nav_menu(array('theme_location'=>'Footer Menu'));?>
            </div>
        </div>
    </div>
       
</div>
    
    <!-- footer closed-->