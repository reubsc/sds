<?php
/* @var $this PersonnelTypesController */
/* @var $model PersonnelTypes */

$this->breadcrumbs=array(
	'Personnel Types'=>array('index'),
	$model->personnelTypeID,
);

$this->menu=array(
	array('label'=>'List PersonnelTypes', 'url'=>array('index')),
	array('label'=>'Create PersonnelTypes', 'url'=>array('create')),
	array('label'=>'Update PersonnelTypes', 'url'=>array('update', 'id'=>$model->personnelTypeID)),
	array('label'=>'Delete PersonnelTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personnelTypeID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PersonnelTypes', 'url'=>array('admin')),
);
?>

<h1>View PersonnelTypes #<?php echo $model->personnelTypeID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'personnelTypeID',
		'personnelTypeName',
		'description',
		'active',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
