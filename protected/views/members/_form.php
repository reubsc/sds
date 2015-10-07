<?php
/* @var $this MembersController */
/* @var $model Members */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'members-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'regionID'); ?>
		<?php 
                    echo CHtml::activeDropDownList($model, 'regionID',
                    Chtml::listData(Regions::model()->findAll(), 'regionID', 'regionName'),
                    array('empty'=>'Select a Region'))            
                ?>
		<?php echo $form->error($model,'regionID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'membershipTypeID'); ?>
		<?php
                     echo CHtml::activeDropDownList($model, 'membershipTypeID',
                     Chtml::listData(MembershipTypes::model()->findAll(), 'membershipTypeID', 'membershipTypeName'),
                     array('empty'=>'Select Membership Type'))
                ?>
		<?php echo $form->error($model,'membershipTypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'memberName'); ?>
		<?php echo $form->textField($model,'memberName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'memberName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dialCode'); ?>
		<?php echo $form->textField($model,'dialCode',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'dialCode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'root_domain'); ?>
		<?php echo $form->textField($model,'root_domain',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'root_domain'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'abbrv'); ?>
		<?php echo $form->textField($model,'abbrv',array('size'=>4,'maxlength'=>4)); ?>
		<?php echo $form->error($model,'abbrv'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISO_CODE'); ?>
		<?php echo $form->textField($model,'ISO_CODE',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'ISO_CODE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textField($model,'notes',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->