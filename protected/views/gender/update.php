<?php
/* @var $this GenderController */
/* @var $model Gender */

$this->breadcrumbs=array(
	'Genders'=>array('index'),
	$model->genderID=>array('view','id'=>$model->genderID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Gender', 'url'=>array('index')),
	array('label'=>'Create Gender', 'url'=>array('create')),
	array('label'=>'View Gender', 'url'=>array('view', 'id'=>$model->genderID)),
	array('label'=>'Manage Gender', 'url'=>array('admin')),
);
?>

<h1>Update Gender <?php echo $model->genderID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>