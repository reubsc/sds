<?php
/* @var $this GroupTypesController */
/* @var $model GroupTypes */

$this->breadcrumbs=array(
	'Group Types'=>array('index'),
	$model->groupTypeID=>array('view','id'=>$model->groupTypeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List GroupTypes', 'url'=>array('index')),
	array('label'=>'Create GroupTypes', 'url'=>array('create')),
	array('label'=>'View GroupTypes', 'url'=>array('view', 'id'=>$model->groupTypeID)),
	array('label'=>'Manage GroupTypes', 'url'=>array('admin')),
);
?>

<h1>Update GroupTypes <?php echo $model->groupTypeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>