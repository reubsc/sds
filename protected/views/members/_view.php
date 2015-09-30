<?php
/* @var $this MembersController */
/* @var $data Members */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('memberID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->memberID), array('view', 'id'=>$data->memberID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->region->getAttributeLabel('regionName')); ?>:</b>
	<?php echo CHtml::encode($data->region->regionName); ?>
	<br />

	<b><?php echo CHtml::encode($data->membershipType->getAttributeLabel('membershipTypeName')); ?>:</b>
	<?php echo CHtml::encode($data->membershipType->membershipTypeName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memberName')); ?>:</b>
	<?php echo CHtml::encode($data->memberName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dialCode')); ?>:</b>
	<?php echo CHtml::encode($data->dialCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('root_domain')); ?>:</b>
	<?php echo CHtml::encode($data->root_domain); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('abbrv')); ?>:</b>
	<?php echo CHtml::encode($data->abbrv); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ISO_CODE')); ?>:</b>
	<?php echo CHtml::encode($data->ISO_CODE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	*/ ?>

</div>