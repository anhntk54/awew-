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
            <div class="content-comment">
                <div class="info-user">
                    <span><a href="" class="username">Nhu tuan anh</a></span>    
                    <span><a href="">ManUFC</a></span>
                </div>
                <div class="comment">
                    <span>Clip ngắn vỏn vẹn 1 phút. Nhưng nó khiến người lớn phải giật mình vì chợt nhận thức rằng, mỗi một hành động của chúng ta đều được những ánh mắt trẻ thơ theo dõi, ghi nhận. Trẻ em như tờ giấy trắng, sẽ hằn in lên đó những vệt màu do ta vẩy vào.</span>
                </div>
                <div class="user-activity">
                    <a href="">Thích</a>
                    <a href="">Bình luận</a>
                    <a href="">Chia sẻ</a>
                    <span class="time">1 giờ trước</span>
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
		/*border-bottom: 1px solid #ddd;*/
	}
	.time{
		float: right;
		color: #ddd;
	}
	a.username{
		font-weight: bold;
	}
	.info-user span{
		display: block;
		margin-bottom: 3px;
	}
	.posts-users{width: 73%;}
	.posts{
		float: left;
		margin-left: -8px;
	}
	.user-activity{
		/*border-top: 1px solid #ddd;*/
	}
	div.one-post div.avatar-user{
        margin-left: -2px;
        margin-right: 3px;
        float: left;
        width: 10%;
    }
    .comment{
    	border-radius: 5px;
border: 1px solid #ddd;
padding: 7px 8px;
margin-bottom: 1px;
box-shadow: inset 0px 0px;
    }
    div.one-post div.content-comment{
        float: right;
        width: 89%;
        border: 1px solid rgba(0,0,0,0.3);
        padding: 9px;
        background: #fff;
        border-radius: 5px;
    }
</style>
