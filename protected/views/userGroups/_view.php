<?php
/* @var $this UserGroupsController */
/* @var $data UserGroups */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userGroupID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userGroupID), array('view', 'id'=>$data->userGroupID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->user->getAttributeLabel('userName')); ?>:</b>
	<?php echo CHtml::encode($data->user->userName); ?>
	<br />

	<b><?php echo CHtml::encode($data->group->getAttributeLabel('groupName')); ?>:</b>
	<?php echo CHtml::encode($data->group->groupName); ?>
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