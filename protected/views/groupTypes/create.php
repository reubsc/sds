<?php
/* @var $this GroupTypesController */
/* @var $model GroupTypes */

$this->breadcrumbs=array(
	'Group Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GroupTypes', 'url'=>array('index')),
	array('label'=>'Manage GroupTypes', 'url'=>array('admin')),
);
?>

<h1>Create GroupTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>