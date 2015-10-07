<?php
/* @var $this PersonnelsController */
/* @var $model Personnels */

$this->breadcrumbs=array(
	'Personnels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personnels', 'url'=>array('index')),
	array('label'=>'Manage Personnels', 'url'=>array('admin')),
);
?>

<h1>Create Personnels</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>