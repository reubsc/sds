<?php
/* @var $this GendersController */
/* @var $model Genders */

$this->breadcrumbs=array(
	'Genders'=>array('index'),
	$model->genderID=>array('view','id'=>$model->genderID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Genders', 'url'=>array('index')),
	array('label'=>'Create Genders', 'url'=>array('create')),
	array('label'=>'View Genders', 'url'=>array('view', 'id'=>$model->genderID)),
	array('label'=>'Manage Genders', 'url'=>array('admin')),
);
?>

<h1>Update Genders <?php echo $model->genderID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>