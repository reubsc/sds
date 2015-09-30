<?php
/* @var $this PersonnelTypesController */
/* @var $model PersonnelTypes */

$this->breadcrumbs=array(
	'Personnel Types'=>array('index'),
	$model->personnelTypeID=>array('view','id'=>$model->personnelTypeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PersonnelTypes', 'url'=>array('index')),
	array('label'=>'Create PersonnelTypes', 'url'=>array('create')),
	array('label'=>'View PersonnelTypes', 'url'=>array('view', 'id'=>$model->personnelTypeID)),
	array('label'=>'Manage PersonnelTypes', 'url'=>array('admin')),
);
?>

<h1>Update PersonnelTypes <?php echo $model->personnelTypeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>