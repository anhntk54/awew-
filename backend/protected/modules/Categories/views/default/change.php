<<<<<<< HEAD
<h1>Manage <?php  echo Categories::model()->getName($parent); ?></h1>
<?php 
	if (isset($_POST['status']) && $_POST['status'] == 0) {
		echo CHtml::link("Thêm loại danh mục này",Yii::app()->createUrl('Categories/default/create',array('check'=>$parent)));
	}
	$cate = Categories::model()->getName($parent);
	$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'categories-grid',
			'dataProvider'=>$model,
			// 'filter'=>$model,
			'columns'=>array(
				'id',
				array(
		            'name'=>'parent_id',
		            'value'=>"'$cate'",
		        ),
				'title',
				'url',
				'description',
				'create_date',
				/*
				'user_id',
				'active',
				'order_possition',
				'type',
				'seo_title',
				'seo_description',
				*/
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); 
=======
<h1>Manage <?php  echo Categories::model()->getName($parent); ?></h1>
<?php 
	if (isset($_POST['status']) && $_POST['status'] == 0) {
		echo CHtml::link("Thêm loại danh mục này",Yii::app()->createUrl('Categories/default/create',array('check'=>$parent)));
	}
	$cate = Categories::model()->getName($parent);
	$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'categories-grid',
			'dataProvider'=>$model,
			// 'filter'=>$model,
			'columns'=>array(
				'id',
				array(
		            'name'=>'parent_id',
		            'value'=>"'$cate'",
		        ),
				'title',
				'url',
				'description',
				'create_date',
				/*
				'user_id',
				'active',
				'order_possition',
				'type',
				'seo_title',
				'seo_description',
				*/
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); 
>>>>>>> 402c32a9249f3b941fa3a3a2066f3aa6277c3ec3
?>