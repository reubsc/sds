<?php
/* @var $this TblAuthItemController */
/* @var $model TblAuthItem */

$this->breadcrumbs=array(
	'Tbl Auth Items'=>array('index'),
	$model->name=>array('view','id'=>$model->name),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblAuthItem', 'url'=>array('index')),
	array('label'=>'Create TblAuthItem', 'url'=>array('create')),
	array('label'=>'View TblAuthItem', 'url'=>array('view', 'id'=>$model->name)),
	array('label'=>'Manage TblAuthItem', 'url'=>array('admin')),
);
?>

<h1>Update TblAuthItem <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>