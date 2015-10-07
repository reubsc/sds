<?php
/* @var $this MemberDetailsController */
/* @var $model MemberDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-details-form',
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
                <?php 
                    echo CHtml::activeDropDownList($model, 'memberID',
                    Chtml::listData(Members::model()->findAll(), 'memberID', 'memberName'),
                    array('empty'=>'Select a Member'))            
                ?>
		<?php echo $form->error($model,'memberID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'govermentTypeID'); ?>
		<?php //echo $form->textField($model,'govermentTypeID',array('size'=>11,'maxlength'=>11)); ?>
                <?php 
                    echo CHtml::activeDropDownList($model, 'govermentTypeID',
                    Chtml::listData(GovermentTypes::model()->findAll(), 'govermentTypeID', 'govermentTypeName'),
                    array('empty'=>'Select a Goverment Type'))            
                ?>
		<?php echo $form->error($model,'govermentTypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'capital'); ?>
		<?php echo $form->textField($model,'capital',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'capital'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'population'); ?>
		<?php echo $form->textField($model,'population',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'population'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grossDomesticProduct'); ?>
		<?php echo $form->textField($model,'grossDomesticProduct',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'grossDomesticProduct'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberOfTelephoneLines'); ?>
		<?php echo $form->textField($model,'numberOfTelephoneLines',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'numberOfTelephoneLines'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numberOfMobileLines'); ?>
		<?php echo $form->textField($model,'numberOfMobileLines',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'numberOfMobileLines'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->