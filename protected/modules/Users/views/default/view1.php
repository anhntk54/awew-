<section id="main" class="prl-span-9">
    <?php $this->widget('Users.components.View_User_Thumbai',array('model'=>$model)); ?>
    <article id="article-single"> 
    <?php $image =Yii::app()->baseUrl.AVATAR_USER.'avatar.png'; ?>
    <div class="prl-grid">  
            <div class="prl-span-9 prl-span-flip posts-users" id="content_tube" >
                <?php $this->widget('Users.components.View_Post_Status'); ?>
    <div class="posts">
        <div class="one-post">
            <div class="avatar-user">
                <a href=""><img src="<?php echo $image; ?>"></a>
            </div>
            <div class="post">
                <div class="status">
                    <div class="info-user">
                        <span class="name"><a href="" class="username">Nhu tuan anh</a></span>    
                        <span class="icon"></span>
                        <div class="clr"></div>
                        <span class="time">1 giờ trước</span>
                    </div>
                    <div class="clr"></div>
                    <div class="content-post">
                        <span>Clip ngắn vỏn vẹn 1 phút. Nhưng nó khiến người lớn phải giật mình vì chợt nhận thức rằng, mỗi một hành động của chúng ta đều được những ánh mắt trẻ thơ theo dõi, ghi nhận. Trẻ em như tờ giấy trắng, sẽ hằn in lên đó những vệt màu do ta vẩy vào.</span>
                    </div>
                    <div class="user-activity">
                        <a href="">Thích</a>
                        <a href="">Bình luận</a>
                        <a href="">Chia sẻ</a>
                    </div>
                </div>
                <div class="clr"></div>
                <div class="comments">
                    <div class="comment">
                        <div class="avatar-user">
                            <a href=""><img src="<?php echo $image; ?>"></a>
                        </div>
                        <div class="post-comment">
                            <div class="info-user1">
                                <span><a href="" class="username">Nhu tuan anh</a></span>    
                            </div>
                            <div class="content">
                                <div class="content-comment">
                                    <span>Clip ngắn vỏn vẹn 1 phút. Nhưng nó khiến người lớn phải giật mình vì chợt nhận thức rằng, mỗi một hành động của chúng ta đều được những ánh mắt trẻ thơ theo dõi, ghi nhận. Trẻ em như tờ giấy trắng, sẽ hằn in lên đó những vệt màu do ta vẩy vào.</span>
                                </div>
                                <div class="user-activity">
                                    <a href="">Thích</a>
                                    <a href="">Bình luận</a>
                                    <a href="">Chia sẻ</a>
                                    <span class="time">1 giờ trước</span>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                    <div class="comment">
                        <div class="avatar-user">
                            <a href=""><img src="<?php echo $image; ?>"></a>
                        </div>
                        <div class="post-comment">
                            <div class="info-user1">
                                <span><a href="" class="username">Nhu tuan anh</a></span>    
                            </div>
                            <div class="content">
                                <div class="content-comment">
                                    <span>Clip ngắn vỏn vẹn 1 phút. Nhưng nó khiến người lớn phải giật mình vì chợt nhận thức rằng, mỗi một hành động của chúng ta đều được những ánh mắt trẻ thơ theo dõi, ghi nhận. Trẻ em như tờ giấy trắng, sẽ hằn in lên đó những vệt màu do ta vẩy vào.</span>
                                </div>
                                <div class="user-activity">
                                    <a href="">Thích</a>
                                    <a href="">Bình luận</a>
                                    <a href="">Chia sẻ</a>
                                    <span class="time">1 giờ trước</span>
                                </div>
                            </div>
                            <div class="clr"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <?php $this->widget('Users.components.View_Left_Sidebar'); ?>
</div>
</article>
</section>
<style type="text/css">

    .info-user{
        background: rgba(248, 243, 243, 0.26);
    }
    .time{
        color: #8D8A8A;
    }
    a.username{
        font-weight: bold;
    }
    div.comment .time{
        float: right;
    }
    span.name{
        width: 50%;
        float: left;
    }
    .info-user span{
        display: block;
        padding: 1px 8px;
    }
    .posts-users{width: 73%;}
    .posts{
        float: left;
        margin-left: -8px;
    }
    .user-activity{
        padding: 2px;
    }
    .user-activity a{
        padding-right: 3px;
    }
    div.one-post div.avatar-user{
        margin-left: -2px;
        margin-right: 3px;
        float: left;
        width: 10%;
    }
    div.comment{
        border-bottom: 1px solid rgba(255, 255, 255, 0.44);
        background: #eee;
    }
    .content-post{
        border-radius: 5px;
        padding: 7px 8px;
        margin-bottom: 1px;
        box-shadow: inset 0px 0px;
    }
    div.one-post div.post{
        float: right;
        width: 89%;
        border: 1px solid rgba(0,0,0,0.3);
        padding: 1px;
        background: #ddd;
        border-radius: 5px;
    }
    div.comment div.avatar-user{
        width: 12%;
    }
    div.comment div.avatar-user img{
        height:45px;
    }
    div.status{
        border-bottom: 1px solid #ddd;
        background: #fff;
    }
    div.content div.user-activity{
        padding: 0px;
    }
    .content{
        float: left;
        width: 85%;
    }
</style>
