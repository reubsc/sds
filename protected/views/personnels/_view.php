<?php
/* @var $this PersonnelsController */
/* @var $data Personnels */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('personnelID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->personnelID), array('view', 'id'=>$data->personnelID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->organization->getAttributeLabel('organizationName')); ?>:</b>
	<?php echo CHtml::encode($data->organization->organizationName); ?>
	<br />

	<b><?php echo CHtml::encode($data->language->getAttributeLabel('languageName')); ?>:</b>
	<?php echo CHtml::encode($data->language->languageName); ?>
	<br />

	<b><?php echo CHtml::encode($data->personnelType->getAttributeLabel('personnelTypeName')); ?>:</b>
	<?php echo CHtml::encode($data->personnelType->personnelTypeName); ?>
	<br />

	<b><?php echo CHtml::encode($data->salutation->getAttributeLabel('salutationName')); ?>:</b>
	<?php echo CHtml::encode($data->salutation->salutationName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('surname')); ?>:</b>
	<?php echo CHtml::encode($data->surname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otherNames')); ?>:</b>
	<?php echo CHtml::encode($data->otherNames); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('genderID')); ?>:</b>
	<?php echo CHtml::encode($data->genderID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDNumber')); ?>:</b>
	<?php echo CHtml::encode($data->IDNumber); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MSISDN')); ?>:</b>
	<?php echo CHtml::encode($data->MSISDN); ?>
	<br />

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

	<b><?php echo CHtml::encode($data->getAttributeLabel('columnA')); ?>:</b>
	<?php echo CHtml::encode($data->columnA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('columnB')); ?>:</b>
	<?php echo CHtml::encode($data->columnB); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('insertedBy')); ?>:</b>
	<?php echo CHtml::encode($data->insertedBy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateModified')); ?>:</b>
	<?php echo CHtml::encode($data->dateModified); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updatedBy')); ?>:</b>
	<?php echo CHtml::encode($data->updatedBy); ?>
	<br />

	*/ ?>

</div>