<div class="post-status-user">
	<textarea id="input-comments" placeholder="Bạn đang nghĩ gì?"></textarea>
	<div class="div-button">
		<a href="javscript::void(0);"><i class="fa fa-camera"></i></a>
		<button id="post-status">Đăng bài</button>
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
	jQuery('#post-status').click(function (e) {
		console.log(jQuery('#input-comments').val());
		var content = jQuery('#input-comments').val().replace(/\n/g, '<br />');
		if (content != '') {
			jQuery.ajax({
				url:'<?php echo Yii::app()->createUrl("/Status/default/create") ?>',
				data:{c:content,t:'<?php echo $this->type; ?>'},
				type:'POST',
				success:function (data) {
					jQuery('.posts-status').prepend(data);
				},
			});
		};
	});
</script>