<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organizations-form',
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
                    array('empty'=>'Select a Country'))
                ?>
		<?php echo $form->error($model,'memberID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizationTypeID'); ?>
		<?php               
                    echo CHtml::activeDropDownList($model, 'organizationTypeID',
                        Chtml::listData(OrganizationTypes::model()->findAll(), 'organizationTypeID', 'organizationTypeName'),  
                        array('empty'=>'Select Organization Type'))                  
                ?>
		<?php echo $form->error($model,'organizationTypeID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizationName'); ?>
		<?php echo $form->textField($model,'organizationName',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'organizationName'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizationDesc'); ?>
		<?php echo $form->textField($model,'organizationDesc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'organizationDesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'organizationCode'); ?>
		<?php echo $form->textField($model,'organizationCode',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'organizationCode'); ?>
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
		<?php echo $form->labelEx($model,'twitter'); ?>
		<?php echo $form->textField($model,'twitter',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'twitter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'facebook'); ?>
		<?php echo $form->textField($model,'facebook',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'facebook'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'website'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'linkedIn'); ?>
		<?php echo $form->textField($model,'linkedIn',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'linkedIn'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'youtube'); ?>
		<?php echo $form->textField($model,'youtube',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'youtube'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'passwordExpiryAge'); ?>
		<?php echo $form->textField($model,'passwordExpiryAge'); ?>
		<?php echo $form->error($model,'passwordExpiryAge'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adminMode'); ?>
		<?php echo $form->textField($model,'adminMode',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'adminMode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active'); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activityHistory'); ?>
		<?php echo $form->textArea($model,'activityHistory',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'activityHistory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'insertedBy'); ?>
		<?php echo $form->textField($model,'insertedBy'); ?>
		<?php echo $form->error($model,'insertedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateCreated'); ?>
		<?php echo $form->textField($model,'dateCreated'); ?>
		<?php echo $form->error($model,'dateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
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