<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
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
		<?php echo $form->labelEx($model,'nameLocation'); ?>
		<?php echo $form->textField($model,'nameLocation',array('size'=>60,'maxlength'=>70)); ?>
		<?php echo $form->error($model,'nameLocation'); ?>
	</div>
	<input id="pac-input" class="controls" type="text" placeholder="Search Box">
	<div class="row">
		<?php echo $form->labelEx($model,'addressLocation'); ?>
		<?php echo $form->textField($model,'addressLocation',array('size'=>60,'maxlength'=>140)); ?>
		<?php echo $form->error($model,'addressLocation'); ?>
	</div>
	<div id="map-canvas"></div>
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
<script src="<?php echo Yii::app()->theme->baseUrl; ?>/lib/place/place.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script type="text/javascript">
	$(function() {
		$("#Event_nameLocation").autocomplete({
		    minLength: 0,
		    source: function(request, response) {
		    	console.log('a');
		    	$.ajax({
		    		url: '<?php echo Yii::app()->createUrl("/Event/default/place"); ?>',
		    		type: 'POST',
		    		dataType: 'json',
		    		data: {p:$("#Event_nameLocation").val() },
		    		success: function(data) {
		              	response($.map(data,function (items) {
		              		return{
		              			value: items.name,
		              		}
		              	}));
		    		}
		    	});
		    	
		    	},
		select: function( event, ui ) {
			console.log('kj');
			return false;
		}
		}).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
		    return $( '<li></li>' )
		        .data( "item.autocomplete", item )
		        .append('<a><span>'+item.value+'</span></a>').appendTo(ul);
		    };
	});
</script>