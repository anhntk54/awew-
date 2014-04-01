<div class="content" >
    <div class="post-status">
        <div class="user">
            <div class="user_avatar">
                <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/_small/1.jpg">
            </div>
            <div class="user_name" style="float: left;">
                <a class="p-username-show">Tiến Minh</a><br />
                <a class="p-show">Fan: Chelsea FC</a>
                <p class="p-show">Cập nhật 1h trước</p>
            </div>
            <a href="javscript::void(0);" class="icon edit-post-status"></a>
            <div class="activity-post">
                <a href="">Chỉnh sửa</a>
                <a href="">Xóa</a>
                <a href="">Riêng tư</a>
            </div>
        </div>  
        <div class="clr"></div>
        <div class="content-post">
            <div class="prl-entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus akjsit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus akjsit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus akj</p>
                <!-- <iframe src="//www.youtube.com/embed/scuxovLtYuA" id="fitvid290741"></iframe> -->
            </div>
        </div>
    </div>
    <div class="user-activity post-user-activity">
        <a href="">Thích</a>
        <a href="">Bình luận</a>
        <a href="">Chia sẻ</a>
    </div>
     <div class="many-like">
        <a class="">Tiến Minh</a>
        <p> và </p>
        <a href="">100 người khác </a>
        <p>thích điều này</p>
    </div>
    <?php $this->widget('Users.components.View_All_Comment_Status'); ?>
</div>