<?php
/* @var $this SalutationsController */
/* @var $model Salutations */

$this->breadcrumbs=array(
	'Salutations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Salutations', 'url'=>array('index')),
	array('label'=>'Manage Salutations', 'url'=>array('admin')),
);
?>

<h1>Create Salutations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>