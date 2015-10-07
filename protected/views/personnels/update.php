<?php
/* @var $this PersonnelsController */
/* @var $model Personnels */

$this->breadcrumbs=array(
	'Personnels'=>array('index'),
	$model->personnelID=>array('view','id'=>$model->personnelID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Personnels', 'url'=>array('index')),
	array('label'=>'Create Personnels', 'url'=>array('create')),
	array('label'=>'View Personnels', 'url'=>array('view', 'id'=>$model->personnelID)),
	array('label'=>'Manage Personnels', 'url'=>array('admin')),
);
?>

<h1>Update Personnels <?php echo $model->personnelID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>