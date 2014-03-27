<section id="main" class="prl-span-9">
    <?php $this->widget('Users.components.View_User_Thumbai',array('model'=>$model)); ?>
    <?php $this->widget('Users.components.View_Left_Sidebar'); ?>
    <?php $this->widget('Users.components.View_Post_Status'); ?>
    <?php $image =Yii::app()->baseUrl.AVATAR_USER.'avatar.png'; ?>
    <div class="posts">
        <div class="one-post">
            <div class="avatar-user">
                <a href=""><img src="<?php echo $image; ?>"></a>
            </div>
            <div class="content-comment">
                <div class="info">
                    <span><a href="">Nhu tuan anh</a></span>    
                    <span><a href="">ManUFC</a></span>
                    <span class="time">1 giờ trước</span>
                </div>
                <div class="comment">
                    <span>Clip ngắn vỏn vẹn 1 phút. Nhưng nó khiến người lớn phải giật mình vì chợt nhận thức rằng, mỗi một hành động của chúng ta đều được những ánh mắt trẻ thơ theo dõi, ghi nhận. Trẻ em như tờ giấy trắng, sẽ hằn in lên đó những vệt màu do ta vẩy vào.</span>
                </div>
                <div class="user-activity">
                    <a href="">Thích</a>
                    <a href="">Bình luận</a>
                    <a href="">Chia sẻ</a>
                </div>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
    .posts{
        float: left;
        width: 74%;
        margin-left: -8px;
    }
    div.one-post div.avatar-user{
        margin-left: -2px;
        margin-right: 3px;
        float: left;
        width: 10%;
    }
    div.one-post div.content-comment{
        float: right;
        width: 89%;
        border: 1px solid rgba(0,0,0,0.3);
        padding: 5px;
        background: rgba(185, 190, 206, 0.43);
        border-radius: 5px;
    }
</style>
