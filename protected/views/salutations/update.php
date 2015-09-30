<?php
/* @var $this SalutationsController */
/* @var $model Salutations */

$this->breadcrumbs=array(
	'Salutations'=>array('index'),
	$model->salutationID=>array('view','id'=>$model->salutationID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Salutations', 'url'=>array('index')),
	array('label'=>'Create Salutations', 'url'=>array('create')),
	array('label'=>'View Salutations', 'url'=>array('view', 'id'=>$model->salutationID)),
	array('label'=>'Manage Salutations', 'url'=>array('admin')),
);
?>

<h1>Update Salutations <?php echo $model->salutationID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>