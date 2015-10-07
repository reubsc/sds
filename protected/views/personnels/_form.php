<?php
/* @var $this PersonnelsController */
/* @var $model Personnels */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'personnels-form',
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
                    CHtml::listData(Organizations::model()->findAll(), 'organizationID', 'organizationName'), 
                            array('empty'=>'Select Organization'))
                ?>
		<?php echo $form->error($model,'organizationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'languageID'); ?>
		<?php 
                    echo CHtml::activeDropDownList($model, 'languageID', 
                    CHtml::listData(Languages::model()->findAll(), 'languageID', 'languageName'), 
                            array('empty'=>'Select Language'))
                ?>
		<?php echo $form->error($model,'languageID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'personnelTypeID'); ?>
		<?php 
                    echo CHtml::activeDropDownList($model, 'personnelTypeID', 
                    CHtml::listData(PersonnelTypes::model()->findAll(), 'personnelTypeID', 'personnelTypeName'),
                            array('empty'=>'Select Personnel Type'))
                ?>
		<?php echo $form->error($model,'personnelTypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salutationID'); ?>
		<?php 
                    echo CHtml::activeDropDownList($model, 'salutationID', 
                    CHtml::listData(Salutations::model()->findAll(), 'salutationID', 'salutationName'),
                            array('empty'=>'Select Salutation')
                            )
                ?>
		<?php echo $form->error($model,'salutationID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'surname'); ?>
		<?php echo $form->textField($model,'surname',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'surname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otherNames'); ?>
		<?php echo $form->textField($model,'otherNames',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'otherNames'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'genderID'); ?>
		<?php 
                    echo CHtml::activeDropDownList($model, 'genderID', 
                    CHtml::listData(Genders::model()->findAll(), 'genderID', 'genderName'),
                            array('empty'=> 'Select Gender'))
                ?>
		<?php echo $form->error($model,'genderID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDNumber'); ?>
		<?php echo $form->textField($model,'IDNumber',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'IDNumber'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MSISDN'); ?>
		<?php echo $form->textField($model,'MSISDN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'MSISDN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otherMSISDN'); ?>
		<?php echo $form->textField($model,'otherMSISDN',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'otherMSISDN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephoneNo'); ?>
		<?php echo $form->textField($model,'telephoneNo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'telephoneNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'otherTelephoneNo'); ?>
		<?php echo $form->textField($model,'otherTelephoneNo',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'otherTelephoneNo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fax'); ?>
		<?php echo $form->textField($model,'fax',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'fax'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'postalAddress'); ?>
		<?php echo $form->textField($model,'postalAddress',array('size'=>60,'maxlength'=>160)); ?>
		<?php echo $form->error($model,'postalAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'physicalAddress'); ?>
		<?php echo $form->textField($model,'physicalAddress',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'physicalAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emailAddress'); ?>
		<?php echo $form->textField($model,'emailAddress',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'emailAddress'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'columnA'); ?>
		<?php echo $form->textField($model,'columnA',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'columnA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'columnB'); ?>
		<?php echo $form->textField($model,'columnB',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'columnB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->