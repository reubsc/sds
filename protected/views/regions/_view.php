<?php
/* @var $this RegionsController */
/* @var $data Regions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('regionID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->regionID), array('view', 'id'=>$data->regionID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regionName')); ?>:</b>
	<?php echo CHtml::encode($data->regionName); ?>
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