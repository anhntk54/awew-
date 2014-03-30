<section id="main" class="prl-span-9">
	<?php $this->widget('Users.components.View_User_Thumbai',array('model'=>$model)); ?>
	<article id="article-single"> 
	<?php $image =Yii::app()->baseUrl.AVATAR_USER.'avatar.png'; ?>
	<div class="prl-grid">	
    	<div class="view-show-post prl-span-9 prl-span-flip posts-users" id="content_tube" >
    		<?php $this->widget('Users.components.View_Post_Status'); ?>
            <hr class="prl-grid-divider">
            <?php $this->widget('Users.components.View_Show_Status'); ?>
            <?php $this->widget('Users.components.View_Show_Status'); ?>
	   </div>
	   <?php $this->widget('Users.components.View_Left_Sidebar'); ?>
    </div>
</article>
</section>
<style type="text/css">

</style>
