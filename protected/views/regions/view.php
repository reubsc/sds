<?php
/* @var $this RegionsController */
/* @var $model Regions */

$this->breadcrumbs=array(
	'Regions'=>array('index'),
	$model->regionID,
);

$this->menu=array(
	array('label'=>'List Regions', 'url'=>array('index')),
	array('label'=>'Create Regions', 'url'=>array('create')),
	array('label'=>'Update Regions', 'url'=>array('update', 'id'=>$model->regionID)),
	array('label'=>'Delete Regions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->regionID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Regions', 'url'=>array('admin')),
);
?>

<h1>View Regions #<?php echo $model->regionID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'regionID',
		'regionName',
		'description',
		'active',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
