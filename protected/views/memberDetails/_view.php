<?php
/* @var $this MemberDetailsController */
/* @var $data MemberDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('memberDetailID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->memberDetailID), array('view', 'id'=>$data->memberDetailID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->member->getAttributeLabel('memberName')); ?>:</b>
	<?php echo CHtml::encode($data->member->memberName); ?>
	<br />

	<b><?php echo CHtml::encode($data->govermentType->getAttributeLabel('govermentTypeName')); ?>:</b>
	<?php echo CHtml::encode($data->govermentType->govermentTypeName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('capital')); ?>:</b>
	<?php echo CHtml::encode($data->capital); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('population')); ?>:</b>
	<?php echo CHtml::encode($data->population); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grossDomesticProduct')); ?>:</b>
	<?php echo CHtml::encode($data->grossDomesticProduct); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numberOfTelephoneLines')); ?>:</b>
	<?php echo CHtml::encode($data->numberOfTelephoneLines); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('numberOfMobileLines')); ?>:</b>
	<?php echo CHtml::encode($data->numberOfMobileLines); ?>
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