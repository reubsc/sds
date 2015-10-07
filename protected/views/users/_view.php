<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userID), array('view', 'id'=>$data->userID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->organization->getAttributeLabel('organizationName')); ?>:</b>
	<?php echo CHtml::encode($data->organization->organizationName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('userName')); ?>:</b>
	<?php echo CHtml::encode($data->userName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fullNames')); ?>:</b>
	<?php echo CHtml::encode($data->fullNames); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailAddress')); ?>:</b>
	<?php echo CHtml::encode($data->emailAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDNumber')); ?>:</b>
	<?php echo CHtml::encode($data->IDNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MSISDN')); ?>:</b>
	<?php echo CHtml::encode($data->MSISDN); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('canAccessUI')); ?>:</b>
	<?php echo CHtml::encode($data->canAccessUI); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordAttempts')); ?>:</b>
	<?php echo CHtml::encode($data->passwordAttempts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordStatusID')); ?>:</b>
	<?php echo CHtml::encode($data->passwordStatusID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('datePasswordChanged')); ?>:</b>
	<?php echo CHtml::encode($data->datePasswordChanged); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateActivated')); ?>:</b>
	<?php echo CHtml::encode($data->dateActivated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateCreated')); ?>:</b>
	<?php echo CHtml::encode($data->dateCreated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('createdBy')); ?>:</b>
	<?php echo CHtml::encode($data->createdBy); ?>
	<br />

	*/ ?>

</div>