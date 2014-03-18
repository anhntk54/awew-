<div class="user-info">
	<div class="avatar-user">
		<img src="<?php echo $image; ?>">
	</div>
	<div class="user-info-name">
		<p><?php echo Yii::app()->user->name; ?></p>
		<p>0 Xu</p>
	</div>
</div>
<style type="text/css">
.user-info{
	position: absolute;
	top: 0px;
	right: 12%;
	background: #6F7779;
	margin: 3px;
	height: 64px;
	padding: 1px;
	overflow: hidden;
}
.avatar-user{
	float: left;
	border-radius: 50%;
	max-width: 50%;
	overflow: hidden;
}
.user-info-name p:first-child{
	min-width: 133px;
	color: #aeb8c2;
}
.user-info-name{
	float: left;
	max-width: 50%;
	margin: 5px 2px;
}
.avatar-user img{
	margin: 6px;
	height: 51px;
	border-radius: 100%;
}
</style>