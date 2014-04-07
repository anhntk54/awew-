<section id="main" class="prl-span-9">
	<?php $this->widget('Users.components.View_User_Thumbai',array('model'=>$model)); ?>
	<article id="article-single"> 
	<div class="prl-grid">	
    	<div class="view-show-post prl-span-9 prl-span-flip posts-users" id="content_tube" >
    		<?php $this->widget('Users.components.View_Post_Status'); ?>
            <?php $this->widget('Users.components.View_Show_Status'); ?>
            <?php $this->widget('Users.components.View_Show_Status'); ?>
	   </div>
	   <?php $this->widget('Users.components.View_Left_Sidebar'); ?>
    </div>
</article>
</section>
<script type="text/javascript">
    var t,statusShowEditPost = 0;
    jQuery('.edit-comment').click(function (e) {
        t = jQuery(this);
        statusShowEditPost = 1;
        t.css('display','inline');
        t.parent().find('.activity-post').slideToggle();
    })
    jQuery('.edit-post-status').click(function (e) {
        t = jQuery(this);
        statusShowEditPost = 1;
        t.parent().find('.activity-post').slideToggle();
    })
    jQuery('body').click(function(e) {
        if (statusShowEditPost == 0) {
            jQuery('.activity-post').hide();
            jQuery('.edit-comment').hide();
            jQuery('.edit-comment').css('display','');
        };
        statusShowEditPost = 0;
    })

</script>
