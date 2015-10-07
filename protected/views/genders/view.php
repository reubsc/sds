<?php
/* @var $this GendersController */
/* @var $model Genders */

$this->breadcrumbs=array(
	'Genders'=>array('index'),
	$model->genderID,
);

$this->menu=array(
	array('label'=>'List Genders', 'url'=>array('index')),
	array('label'=>'Create Genders', 'url'=>array('create')),
	array('label'=>'Update Genders', 'url'=>array('update', 'id'=>$model->genderID)),
	array('label'=>'Delete Genders', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->genderID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Genders', 'url'=>array('admin')),
);
?>

<h1>View Genders #<?php echo $model->genderID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'genderID',
		'genderName',
		'Abbreviation',
		'active',
		'dateCreated',
		'insertedBy',
		'dateModified',
		'updatedBy',
	),
)); ?>
