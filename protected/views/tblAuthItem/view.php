<?php
/* @var $this TblAuthItemController */
/* @var $model TblAuthItem */

$this->breadcrumbs=array(
	'Tbl Auth Items'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblAuthItem', 'url'=>array('index')),
	array('label'=>'Create TblAuthItem', 'url'=>array('create')),
	array('label'=>'Update TblAuthItem', 'url'=>array('update', 'id'=>$model->name)),
	array('label'=>'Delete TblAuthItem', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->name),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblAuthItem', 'url'=>array('admin')),
);
?>

<h1>View TblAuthItem #<?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'type',
		'description',
		'bizrule',
		'data',
		'dateCreated',
		'dateModified',
		'insertedBy',
		'updatedBy',
	),
)); ?>
