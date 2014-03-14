<?php 
	$srcImg = "./images/event/image.jpg";
	$styleImg = '';
	if ($model->image != null) {
		$srcImg = Yii::app()->baseUrl.$model->image->path.$model->image->image;
		$styleImg = "style='".$model->image->style."'";
	}
?>
<section id="main" class="prl-span-9">
	<div id="slider">
		<div id="homeslider" class="fullwidth flexslider">
			<article>
				<div class="image-logo">
					<a href="#">
						<img class="drag" src="<?php echo $srcImg; ?>" <?php echo $styleImg; ?> >
					</a>
					<button class="delete-image chang-image prl-button prl-button-newsletter" >Hủy bỏ</button>
					<button class="save-image chang-image prl-button prl-button-primary">Thay đổi ảnh bìa </button>
				</div>
				<div class="event-title slider-title">
					<h2>
						<a ><?php echo $model->title; ?></a> <span class="prl-badge prl-badge-success">Dicussion</span>
					</h2>
				</div>
				<div class="event-about slider-meta">
					<span>Nov 23th, 2013</span> 
					<i class="fa fa-comment-o"></i> 
					<span class="cm">04</span>
				</div>				
			</article>
		</div><!-- #slider -->	
	</div>
</section>
<input type="file" name="filesToUpload[]" id="filesToUpload" />
<style type="text/css">
#filesToUpload{
	display: none;
}
</style>
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/view_event.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function(e) {
		var eventView = new ViewEvent(1);
		eventView.init();
	});
</script>