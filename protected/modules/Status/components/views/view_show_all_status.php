<div class="posts-status">
	<?php 
		foreach ($model as $key => $value) {
			$this->widget('Status.components.View_Show_Status',array('value'=>$value));
		}
		$this->widget('Status.components.View_Js_Post_Status');
	?>
</div>