<?php
/* @var $this GroupTypesController */
/* @var $model GroupTypes */

$this->breadcrumbs=array(
	'Group Types'=>array('index'),
	$model->groupTypeID,
);

$this->menu=array(
	array('label'=>'List GroupTypes', 'url'=>array('index')),
	array('label'=>'Create GroupTypes', 'url'=>array('create')),
	array('label'=>'Update GroupTypes', 'url'=>array('update', 'id'=>$model->groupTypeID)),
	array('label'=>'Delete GroupTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->groupTypeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GroupTypes', 'url'=>array('admin')),
);
?>

<h1>View GroupTypes #<?php echo $model->groupTypeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'groupTypeID',
		'groupTypeName',
		'description',
		'active',
		'activityHistory',
		'dateCreated',
		'insertedBy',
		'dateModified',
		'updatedBy',
	),
)); ?>
