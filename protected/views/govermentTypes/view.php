<?php
/* @var $this GovermentTypesController */
/* @var $model GovermentTypes */

$this->breadcrumbs=array(
	'Goverment Types'=>array('index'),
	$model->govermentTypeID,
);

$this->menu=array(
	array('label'=>'List GovermentTypes', 'url'=>array('index')),
	array('label'=>'Create GovermentTypes', 'url'=>array('create')),
	array('label'=>'Update GovermentTypes', 'url'=>array('update', 'id'=>$model->govermentTypeID)),
	array('label'=>'Delete GovermentTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->govermentTypeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GovermentTypes', 'url'=>array('admin')),
);
?>

<h1>View GovermentTypes #<?php echo $model->govermentTypeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'govermentTypeID',
		'govermentTypeName',
		'description',
		'active',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
