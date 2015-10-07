<?php
/* @var $this GenderController */
/* @var $data Gender */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('genderID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->genderID), array('view', 'id'=>$data->genderID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genderName')); ?>:</b>
	<?php echo CHtml::encode($data->genderName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Abbreviation')); ?>:</b>
	<?php echo CHtml::encode($data->Abbreviation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('insertedBy')); ?>:</b>
	<?php echo CHtml::encode($data->insertedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	*/ ?>

</div>