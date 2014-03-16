<div id="login-3" class="widget widget-login prl-panel">
	<h5 class="prl-block-title">Login</h5>
	<div>
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
			'htmlOptions'=>array('class'=>'prl-form',),
		)); ?>
		<div class="prl-form-row prl-login-username">
			<?php echo $form->textField($model,'username',array('class'=>'prl-width-1-1','placeholder'=>$model->getAttributeLabel('username'))); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>

		<div class="prl-form-row prl-login-password">
			<?php echo $form->passwordField($model,'password',array('class'=>'prl-width-1-1','placeholder'=>$model->getAttributeLabel('password'))); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>
		<div class="prl-form-row">
			 <?php echo CHtml::ajaxSubmitButton('Đăng nhập',CHtml::normalizeUrl(array('/Users/default/login')),
                 array(
                     'type'=>'post',
                     'success'=>'function(data) {
                     	console.log(data);
                      }',                    
                     // 'beforeSend'=>'function(){                        
                     //       $("#AjaxLoader").show();
                     //  }'
                     ),array('id'=>'mybtn','class'=>'prl-button prl-button-primary')); ?>
				<label for="form-s-mix1" class="prl-form-help-inline">
					<?php echo $form->checkBox($model,'rememberMe',array('id'=>'form-s-mix1')).$model->getAttributeLabel('rememberMe'); ?>
				</label>
			</div>
			<div class="prl-form-row">
				<a href="#">Lost your password?</a>
			</div>

	<?php $this->endWidget(); ?>
	</div>
</div>