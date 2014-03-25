<section id="main" class="prl-span-9">
	<?php $this->widget('Users.components.View_User_Thumbai',array('model'=>$model)); ?>
	<?php $this->widget('Users.components.View_Left_Sidebar'); ?>
	<div class="post-status-user">
		<div contenteditable="true" class="input" data-ph="Bạn đang nghĩ gì?"></div>
		<i class="fa fa-camera"></i>
		<i class="fa fa-video-camera"></i>
	</div>
</section>
<style type="text/css">
.post-status-user{
	border: 1px solid rgba(39, 34, 34, 0.5);
	border-radius: 0%;
	padding: 9px;
	box-shadow: 0px 0px 10px rgba(0,0,0,4);
	overflow: hidden;
}
.post-status-user .input{
	float: left;
	width: 93%;
}
.post-status-user i{
	font-size: 23px;
}
[contentEditable=true]:empty:not(:focus):before{
  content:attr(data-ph);
  color:grey;
  font-style:italic;
}
</style>