<?php
/* @var $this MemberCitiesController */
/* @var $data MemberCities */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('memberCityID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->memberCityID), array('view', 'id'=>$data->memberCityID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->member->getAttributeLabel('memberName')); ?>:</b>
	<?php echo CHtml::encode($data->member->memberName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('memberCityName')); ?>:</b>
	<?php echo CHtml::encode($data->memberCityName); ?>
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


</div>