<?php 
	$srcImg = "./images/event/image.jpg";
	$styleImg = '';
	if ($model->image != null) {
		$srcImg = Yii::app()->baseUrl.$model->image->path.$model->image->image;
		$styleImg = "style='".$model->image->style."'";
	}
?>

<div id="slider">
	<div id="homeslider" class="fullwidth flexslider">
		<article>
			<div class="image-logo">
				<a href="#">
					<img class="drag" src="<?php echo $srcImg; ?>" <?php echo $styleImg; ?> >
					<img class="avatar" src="./images/users/avatar/avatar.png">
				</a>
				<button class="delete-image chang-image prl-button prl-button-newsletter" >Hủy bỏ</button>
				<button class="save-image chang-image prl-button prl-button-primary">Thay đổi ảnh bìa </button>
			</div>
			<div class="event-about slider-meta">
				<span>Nov 23th, 2013</span> 
				<i class="fa fa-comment-o"></i> 
				<span class="cm">04</span>
			</div>				
		</article>
	</div><!-- #slider -->	
</div>
<input type="file" name="filesToUpload[]" id="filesToUpload" />
<style type="text/css">
#filesToUpload{
	display: none;
}
</style>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/view_event.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(e) {
		var dataEvent = {
			fileUpload:'filesToUpload',
			buttonUpload:'.save-image',
			nameImg:'.drag',
			nameDiv:'.image-logo',
			btnDelete:'.delete-image',
			title:'.event-title',
			urlSaveImg : '<?php echo Yii::app()->createUrl("/Event/default/saveimage") ?>',
			urlUpImg : '<?php echo Yii::app()->createUrl("/Event/default/image") ?>',
			urlDeImge:  '<?php echo Yii::app()->createUrl("/Event/default/deleteimage") ?>',
			idEvent: <?php echo $model->id; ?>,
			imgEvent : '<?php echo $srcImg; ?>',
			sizeMax:10000000,
			widthMin : 400,
			heightMin:100,
		};
		var eventView = new EventView(dataEvent);
	});
</script> 