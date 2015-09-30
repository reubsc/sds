<?php
/* @var $this MembershipTypesController */
/* @var $model MembershipTypes */

$this->breadcrumbs=array(
	'Membership Types'=>array('index'),
	$model->membershipTypeID,
);

$this->menu=array(
	array('label'=>'List MembershipTypes', 'url'=>array('index')),
	array('label'=>'Create MembershipTypes', 'url'=>array('create')),
	array('label'=>'Update MembershipTypes', 'url'=>array('update', 'id'=>$model->membershipTypeID)),
	array('label'=>'Delete MembershipTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->membershipTypeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MembershipTypes', 'url'=>array('admin')),
);
?>

<h1>View MembershipTypes #<?php echo $model->membershipTypeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'membershipTypeID',
		'membershipTypeName',
		'description',
		'active',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
