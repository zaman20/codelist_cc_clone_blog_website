<div class="recent-comment-box">
    <h4 class="recent-post-title nobg">RECENT <strong>COMMENTS</strong></h4>
    <?php $my_options =  get_option('my_option');?>

    <!-- content -->
    <div class="comment-box">
        <h4 class="comment-title">
            <span class="material-symbols-outlined micon">chat_bubble</span>
            <?php echo $my_options['opt-name'];?>:
        </h4>
        <p class="comment-details"><?php echo $my_options['opt-comment'];?></p>
    </div>

    <div class="comment-box">
        <h4 class="comment-title">
            <span class="material-symbols-outlined micon">chat_bubble</span>
            <?php echo $my_options['opt-name1'];?>:
        </h4>
        <p class="comment-details"><?php echo $my_options['opt-comment1'];?></p>
    </div>

    <div class="comment-box">
        <h4 class="comment-title">
            <span class="material-symbols-outlined micon">chat_bubble</span>
            <?php echo $my_options['opt-name2'];?>:
        </h4>
        <p class="comment-details"><?php echo $my_options['opt-comment2'];?></p>
    </div>

    <div class="comment-box">
        <h4 class="comment-title">
            <span class="material-symbols-outlined micon">chat_bubble</span>
            <?php echo $my_options['opt-name3'];?>:
        </h4>
        <p class="comment-details"><?php echo $my_options['opt-comment3'];?></p>
    </div>

    <div class="comment-box">
        <h4 class="comment-title">
            <span class="material-symbols-outlined micon">chat_bubble</span>
            <?php echo $my_options['opt-name4'];?>:
        </h4>
        <p class="comment-details"><?php echo $my_options['opt-comment4'];?></p>
    </div>

    <div class="add-part">
    
    <?php echo $my_options['opt-code-editor-2'];?>
    </div>

</div>