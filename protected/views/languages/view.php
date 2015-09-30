<?php
/* @var $this LanguagesController */
/* @var $model Languages */

$this->breadcrumbs=array(
	'Languages'=>array('index'),
	$model->languageID,
);

$this->menu=array(
	array('label'=>'List Languages', 'url'=>array('index')),
	array('label'=>'Create Languages', 'url'=>array('create')),
	array('label'=>'Update Languages', 'url'=>array('update', 'id'=>$model->languageID)),
	array('label'=>'Delete Languages', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->languageID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Languages', 'url'=>array('admin')),
);
?>

<h1>View Languages #<?php echo $model->languageID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'languageID',
		'languageName',
		'description',
		'abbreviation',
		'active',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
