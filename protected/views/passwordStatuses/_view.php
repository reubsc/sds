<?php
/* @var $this PasswordStatusesController */
/* @var $data PasswordStatuses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordStatusID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->passwordStatusID), array('view', 'id'=>$data->passwordStatusID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordStatus')); ?>:</b>
	<?php echo CHtml::encode($data->passwordStatus); ?>
	<br />

	<b><?php echo CHtml::encode($data->User->getAttributeLabel('fullNames')); ?>:</b>
	<?php echo CHtml::encode($data->Users->fullNames); ?>
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