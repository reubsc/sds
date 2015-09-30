<?php
/* @var $this OrganizationTypesController */
/* @var $model OrganizationTypes */

$this->breadcrumbs=array(
	'Organization Types'=>array('index'),
	$model->organizationTypeID,
);

$this->menu=array(
	array('label'=>'List OrganizationTypes', 'url'=>array('index')),
	array('label'=>'Create OrganizationTypes', 'url'=>array('create')),
	array('label'=>'Update OrganizationTypes', 'url'=>array('update', 'id'=>$model->organizationTypeID)),
	array('label'=>'Delete OrganizationTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->organizationTypeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OrganizationTypes', 'url'=>array('admin')),
);
?>

<h1>View OrganizationTypes #<?php echo $model->organizationTypeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'organizationTypeID',
		'organizationTypeName',
		'description',
		'active',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
