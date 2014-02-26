
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'event-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_title'); ?>
		<?php echo $form->textField($model,'sub_title',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'sub_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_content'); ?>
		<?php echo $form->textField($model,'sub_content',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'sub_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'location_id'); ?>
		<?php echo $form->textField($model,'location_id'); ?>
		<?php echo $form->error($model,'location_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); ?>
		<?php echo $form->textField($model,'end_date'); ?>
		<?php echo $form->error($model,'end_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'begin_date'); ?>
		<?php echo $form->textField($model,'begin_date'); ?>
		<?php echo $form->error($model,'begin_date'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript">
	$("#Event_title").autocomplete({
		    minLength: 0,
		    source: function(request, response) {
		    	console.log('a');
		    	$.ajax({
		    		url: '<?php echo Yii::app()->createUrl("/Event/default/place"); ?>',
		    		type: 'POST',
		    		dataType: 'json',
		    		data: {p: 'value1'},
		    		success: function(data) {
		    			console.log(data);
		              	response($.map(data,function (items) {
		              		console.log(items.name+"  ,smlks");
		              		return{
		              			value: items.name,
		              			// id: items.id,
		              		}
		              	}));
		    		}
		    	});
		    	
		    },
		    select: function( event, ui ) {
				console.log('kj');
				return false;
			}
		}).data( "ui-autocomplete" )._renderMenu  = function(ul, item) {
			$.each( item, function( index, item ) {
			   return $('<li></li>')
			            .data("item.autocomplete", item)
			            .append(item.value )
			            .appendTo(ul);
				});
			}
</script>