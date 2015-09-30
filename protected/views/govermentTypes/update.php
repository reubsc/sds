<?php
/* @var $this GovermentTypesController */
/* @var $model GovermentTypes */

$this->breadcrumbs=array(
	'Goverment Types'=>array('index'),
	$model->govermentTypeID=>array('view','id'=>$model->govermentTypeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List GovermentTypes', 'url'=>array('index')),
	array('label'=>'Create GovermentTypes', 'url'=>array('create')),
	array('label'=>'View GovermentTypes', 'url'=>array('view', 'id'=>$model->govermentTypeID)),
	array('label'=>'Manage GovermentTypes', 'url'=>array('admin')),
);
?>

<h1>Update GovermentTypes <?php echo $model->govermentTypeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>