<?php
/* @var $this RegionsController */
/* @var $model Regions */

$this->breadcrumbs=array(
	'Regions'=>array('index'),
	$model->regionID=>array('view','id'=>$model->regionID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Regions', 'url'=>array('index')),
	array('label'=>'Create Regions', 'url'=>array('create')),
	array('label'=>'View Regions', 'url'=>array('view', 'id'=>$model->regionID)),
	array('label'=>'Manage Regions', 'url'=>array('admin')),
);
?>

<h1>Update Regions <?php echo $model->regionID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>