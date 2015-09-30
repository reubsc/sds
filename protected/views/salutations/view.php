<?php
/* @var $this SalutationsController */
/* @var $model Salutations */

$this->breadcrumbs=array(
	'Salutations'=>array('index'),
	$model->salutationID,
);

$this->menu=array(
	array('label'=>'List Salutations', 'url'=>array('index')),
	array('label'=>'Create Salutations', 'url'=>array('create')),
	array('label'=>'Update Salutations', 'url'=>array('update', 'id'=>$model->salutationID)),
	array('label'=>'Delete Salutations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->salutationID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Salutations', 'url'=>array('admin')),
);
?>

<h1>View Salutations #<?php echo $model->salutationID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'salutationID',
		'salutationName',
		'description',
		'abbreviation',
		'active',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
