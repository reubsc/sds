<?php
/* @var $this TblAuthItemController */
/* @var $model TblAuthItem */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>64)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bizrule'); ?>
		<?php echo $form->textArea($model,'bizrule',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data'); ?>
		<?php echo $form->textArea($model,'data',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateCreated'); ?>
		<?php echo $form->textField($model,'dateCreated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dateModified'); ?>
		<?php echo $form->textField($model,'dateModified'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'insertedBy'); ?>
		<?php echo $form->textField($model,'insertedBy'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updatedBy'); ?>
		<?php echo $form->textField($model,'updatedBy'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->