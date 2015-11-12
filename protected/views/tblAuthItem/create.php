<?php
/* @var $this TblAuthItemController */
/* @var $model TblAuthItem */

$this->breadcrumbs=array(
	'Tbl Auth Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblAuthItem', 'url'=>array('index')),
	array('label'=>'Manage TblAuthItem', 'url'=>array('admin')),
);
?>

<h1>Create TblAuthItem</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>