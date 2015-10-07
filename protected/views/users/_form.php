<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'organizationID'); ?>
		<?php 
                    echo CHtml::activeDropDownList($model, 'organizationID',
                    Chtml::listData(Organizations::model()->findAll(), 'organizationID', 'organizationName'),
                    array('empty'=>'Select a Orgnization'))   
                ?>
		<?php echo $form->error($model,'organizationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'userName'); ?>
		<?php echo $form->textField($model,'userName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'userName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fullNames'); ?>
		<?php echo $form->textField($model,'fullNames',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'fullNames'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailAddress'); ?>
		<?php echo $form->textField($model,'emailAddress',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'emailAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDNumber'); ?>
		<?php echo $form->textField($model,'IDNumber',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'IDNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MSISDN'); ?>
		<?php echo $form->textField($model,'MSISDN',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'MSISDN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'canAccessUI'); ?>
		<?php echo $form->textField($model,'canAccessUI',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'canAccessUI'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwordAttempts'); ?>
		<?php echo $form->textField($model,'passwordAttempts'); ?>
		<?php echo $form->error($model,'passwordAttempts'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwordStatusID'); ?>
		<?php 
                    echo CHtml::activeDropDownList($model, 'passwordStatusID',
                    Chtml::listData(PasswordStatuses::model()->findAll(), 'passwordStatusID', 'passwordStatus'),
                    array('empty'=>'Select a Orgnization'))    ?>
		<?php echo $form->error($model,'passwordStatusID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->