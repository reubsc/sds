<?php
/* @var $this GendersController */
/* @var $model Genders */

$this->breadcrumbs=array(
	'Genders'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Genders', 'url'=>array('index')),
	array('label'=>'Manage Genders', 'url'=>array('admin')),
);
?>

<h1>Create Genders</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>