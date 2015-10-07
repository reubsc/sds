<?php
/* @var $this GroupTypesController */
/* @var $data GroupTypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupTypeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->groupTypeID), array('view', 'id'=>$data->groupTypeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('groupTypeName')); ?>:</b>
	<?php echo CHtml::encode($data->groupTypeName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activityHistory')); ?>:</b>
	<?php echo CHtml::encode($data->activityHistory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insertedBy')); ?>:</b>
	<?php echo CHtml::encode($data->insertedBy); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	*/ ?>

</div>