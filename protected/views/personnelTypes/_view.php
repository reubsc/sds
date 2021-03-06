<?php
/* @var $this PersonnelTypesController */
/* @var $data PersonnelTypes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personnelTypeID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personnelTypeID), array('view', 'id'=>$data->personnelTypeID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('personnelTypeName')); ?>:</b>
	<?php echo CHtml::encode($data->personnelTypeName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	*/ ?>

</div>