<?php
/* @var $this OrganizationsController */
/* @var $data Organizations */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizationID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->organizationID), array('view', 'id'=>$data->organizationID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->member->getAttributeLabel('memberName')); ?>:</b>
	<?php echo CHtml::encode($data->member->memberName); ?>
	<br />

	<b><?php echo CHtml::encode($data->organizationType->getAttributeLabel('organizationTypeName')); ?>:</b>
	<?php echo CHtml::encode($data->organizationType->organizationTypeName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizationName')); ?>:</b>
	<?php echo CHtml::encode($data->organizationName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizationDesc')); ?>:</b>
	<?php echo CHtml::encode($data->organizationDesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('organizationCode')); ?>:</b>
	<?php echo CHtml::encode($data->organizationCode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MSISDN')); ?>:</b>
	<?php echo CHtml::encode($data->MSISDN); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('otherMSISDN')); ?>:</b>
	<?php echo CHtml::encode($data->otherMSISDN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephoneNo')); ?>:</b>
	<?php echo CHtml::encode($data->telephoneNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otherTelephoneNo')); ?>:</b>
	<?php echo CHtml::encode($data->otherTelephoneNo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fax')); ?>:</b>
	<?php echo CHtml::encode($data->fax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('postalAddress')); ?>:</b>
	<?php echo CHtml::encode($data->postalAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('physicalAddress')); ?>:</b>
	<?php echo CHtml::encode($data->physicalAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emailAddress')); ?>:</b>
	<?php echo CHtml::encode($data->emailAddress); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('twitter')); ?>:</b>
	<?php echo CHtml::encode($data->twitter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('facebook')); ?>:</b>
	<?php echo CHtml::encode($data->facebook); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('linkedIn')); ?>:</b>
	<?php echo CHtml::encode($data->linkedIn); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('youtube')); ?>:</b>
	<?php echo CHtml::encode($data->youtube); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordExpiryAge')); ?>:</b>
	<?php echo CHtml::encode($data->passwordExpiryAge); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adminMode')); ?>:</b>
	<?php echo CHtml::encode($data->adminMode); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('active')); ?>:</b>
	<?php echo CHtml::encode($data->active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('activityHistory')); ?>:</b>
	<?php echo CHtml::encode($data->activityHistory); ?>
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