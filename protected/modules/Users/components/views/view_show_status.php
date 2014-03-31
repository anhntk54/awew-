<div class="content" >
    <div class="user">
        <div class="user_avatar" style="float: left; margin-right: 10px;">
            <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/_small/1.jpg"/ style="width: 60px;">
        </div>
        <div class="user_name" style="float: left;">
            <a class="p-username-show">Tiến Minh</a><br />
            <a class="p-show">Fan: Chelsea FC</a>
            <p class="p-show">Cập nhật 1h trước</p>
        </div>
    </div>  
    <div class="clearfix"></div>
    <div class="content-post">
        <div class="prl-entry-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus akjsit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus akjsit amet, consectetur adipiscing elit. In luctus luctus est vestibulum luctus akj</p>
            <!-- <iframe src="//www.youtube.com/embed/scuxovLtYuA" id="fitvid290741"></iframe> -->
        </div>
        <div class="user-activity">
            <a href="">Thích</a>
            <a href="">Bình luận</a>
            <a href="">Chia sẻ</a>
        </div>
    </div>
    <?php $this->widget('Users.components.View_All_Comment_Status'); ?>
    <hr class="prl-grid-divider">
</div>