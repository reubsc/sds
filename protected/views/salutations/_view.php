<?php
/* @var $this SalutationsController */
/* @var $data Salutations */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('salutationID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->salutationID), array('view', 'id'=>$data->salutationID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('salutationName')); ?>:</b>
	<?php echo CHtml::encode($data->salutationName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abbreviation')); ?>:</b>
	<?php echo CHtml::encode($data->abbreviation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insertedBy')); ?>:</b>
	<?php echo CHtml::encode($data->insertedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	*/ ?>

</div>