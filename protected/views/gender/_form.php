<?php
/* @var $this GenderController */
/* @var $model Gender */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gender-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'genderName'); ?>
		<?php echo $form->textField($model,'genderName',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'genderName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Abbreviation'); ?>
		<?php echo $form->textField($model,'Abbreviation',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'Abbreviation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateCreated'); ?>
		<?php echo $form->textField($model,'dateCreated'); ?>
		<?php echo $form->error($model,'dateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insertedBy'); ?>
		<?php echo $form->textField($model,'insertedBy'); ?>
		<?php echo $form->error($model,'insertedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateModified'); ?>
		<?php echo $form->textField($model,'dateModified'); ?>
		<?php echo $form->error($model,'dateModified'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->