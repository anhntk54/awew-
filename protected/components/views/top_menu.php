<ul class="top-menu">
	<?php if(Yii::app()->user->isGuest): ?>
	    <li><a href="<?php echo Yii::app()->createUrl('Users/default/create'); ?>">Đăng ký</a></li>
	    <li><a href="<?php echo Yii::app()->createUrl('Users/default/login'); ?>">Đăng nhập</a></li>
	<?php else: ?>
		<li><a href="<?php echo Yii::app()->createUrl('Users/default/logout'); ?>"><?php echo Yii::app()->user->name; ?></a></li>
	<?php endif; ?>
</ul> 