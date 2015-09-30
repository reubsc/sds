<?php
/* @var $this MemberCitiesController */
/* @var $model MemberCities */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-cities-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'memberID'); ?>
		<?php //echo $form->textField($model,'memberID',array('size'=>11,'maxlength'=>11)); ?>
                <?php 
                    echo CHtml::activeDropDownList($model, 'memberID',
                    Chtml::listData(Members::model()->findAll(), 'memberID', 'memberName'),
                    array('empty'=>'Select a Member'))            
                ?>
		<?php echo $form->error($model,'memberID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memberCityName'); ?>
		<?php echo $form->textField($model,'memberCityName',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'memberCityName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insertedBy'); ?>
		<?php echo $form->textField($model,'insertedBy',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'insertedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateCreated'); ?>
		<?php echo $form->textField($model,'dateCreated'); ?>
		<?php echo $form->error($model,'dateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'updatedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateModified'); ?>
		<?php echo $form->textField($model,'dateModified'); ?>
		<?php echo $form->error($model,'dateModified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->