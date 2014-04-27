<div class="post-status-user">
	<textarea id="input-comments" placeholder="Bạn đang nghĩ gì?"></textarea>
	<div class="div-button">
		<a href="javscript::void(0);"><i class="fa fa-camera"></i></a>
		<button class="post-status" id="post-status-all" onclick="post_status();">Đăng bài</button>
		<div class="status-post">
			<a href="javscript::void(0);">Công khai</a>
			<i class="fa fa-filter fa-lg"></i>
			<div class="types">
				<a href="javscript::void(0);">Riêng tư</a>
			</div>
		</div>
	</div>
	<div class="clr"></div>
</div>
<script type="text/javascript">
<<<<<<< HEAD

    function post_status(){
        jQuery.ajax({
			url:'<?php echo Yii::app()->createUrl("/Status/default/create") ?>',
=======
    function post_status(){
        jQuery.ajax({
			url:'<?php echo Yii::app()->createUrl("/Pages/default/create")?>',
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
			data:{c:content,t:'<?php echo $this->type; ?>'},
			type:'POST',
			success:function (data) {
				jQuery('.posts-status').prepend(data);
			},
		});
    }
<<<<<<< HEAD

=======
    
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
	jQuery('#post-status-all').click(function (e) {
		console.log(jQuery('#input-comments').val());
		var content = jQuery('#input-comments').val().replace(/\n/g, '<br />');
		if (content != '') {
			jQuery.ajax({
				url:'<?php echo Yii::app()->createUrl("/Pages/default/create") ?>',
				data:{c:content,t:'<?php echo $this->type; ?>'},
				type:'POST',
				success:function (data) {
					jQuery('.posts-status').prepend(data);
				},
			});
		};
	});
</script>