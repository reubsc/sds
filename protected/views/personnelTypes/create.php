<?php
/* @var $this PersonnelTypesController */
/* @var $model PersonnelTypes */

$this->breadcrumbs=array(
	'Personnel Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PersonnelTypes', 'url'=>array('index')),
	array('label'=>'Manage PersonnelTypes', 'url'=>array('admin')),
);
?>

<h1>Create PersonnelTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>