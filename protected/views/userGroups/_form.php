<?php
/* @var $this UserGroupsController */
/* @var $model UserGroups */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-groups-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'userID'); ?>
		<?php 
                echo CHtml::activeDropDownList($model, 'userID', 
                 CHtml::listData(Users::model()->findAll(), 'userID', 'userName'),
                 array('empty'=>'Select User'))
                
                ?>
		<?php echo $form->error($model,'userID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'groupID'); ?>
		<?php 
                echo CHtml::activeDropDownList($model, 'groupID', 
                 CHtml::listData(Groups::model()->findAll(), 'groupID', 'groupName'),
                 array('empty'=>'Select a Group')
                        )
                ?>
		<?php echo $form->error($model,'groupID'); ?>
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