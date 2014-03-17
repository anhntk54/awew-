

<section id="main" class="prl-span-9 login-main">
<div class="login">
	<h5>Đăng nhập hệ thống</h5>

	<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'login-form',
		// 'enableClientValidation'=>true,
		// 'clientOptions'=>array(
		// 	'validateOnSubmit'=>true,
		// ),
	)); ?>
	<?php echo $form->errorSummary($model); ?>
		<div class="row">
			<?php echo $form->labelEx($model,'username'); ?>
			<?php echo $form->textField($model,'username',array('class'=>'input-login')); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'password'); ?>
			<?php echo $form->passwordField($model,'password',array('class'=>'input-login')); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>

		<div class="row rememberMe">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<?php echo $form->label($model,'rememberMe'); ?>
			<?php echo $form->error($model,'rememberMe'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Login'); ?>
		</div>

	<?php $this->endWidget(); ?>
	</div><!-- form -->
</div>
<style type="text/css">
	.login h5{
		font-weight: bold;
		color: #000;
	}
	.row label,.row .input-login{
		display: inline-block;
	}
	.row .input-login{
		width: 30%;
	}
	.row input{}
	.login{
		width: 50%;
		margin: 0px auto;
		border: 1px solid #857D7D;
		border-radius: 6px;
		padding: 16px;
	}
	.login-main{
		width: 100%;
	}
</style>
</section>