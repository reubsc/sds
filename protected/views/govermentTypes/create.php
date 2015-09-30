<?php
/* @var $this GovermentTypesController */
/* @var $model GovermentTypes */

$this->breadcrumbs=array(
	'Goverment Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GovermentTypes', 'url'=>array('index')),
	array('label'=>'Manage GovermentTypes', 'url'=>array('admin')),
);
?>

<h1>Create GovermentTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>