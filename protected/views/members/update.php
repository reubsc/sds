<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->memberID=>array('view','id'=>$model->memberID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Members', 'url'=>array('index')),
	array('label'=>'Create Members', 'url'=>array('create')),
	array('label'=>'View Members', 'url'=>array('view', 'id'=>$model->memberID)),
	array('label'=>'Manage Members', 'url'=>array('admin')),
);
?>

<h1>Update Members <?php echo $model->memberID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>