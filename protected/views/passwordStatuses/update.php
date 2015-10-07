<?php
/* @var $this PasswordStatusesController */
/* @var $model PasswordStatuses */

$this->breadcrumbs=array(
	'Password Statuses'=>array('index'),
	$model->passwordStatusID=>array('view','id'=>$model->passwordStatusID),
	'Update',
);

$this->menu=array(
	array('label'=>'List PasswordStatuses', 'url'=>array('index')),
	array('label'=>'Create PasswordStatuses', 'url'=>array('create')),
	array('label'=>'View PasswordStatuses', 'url'=>array('view', 'id'=>$model->passwordStatusID)),
	array('label'=>'Manage PasswordStatuses', 'url'=>array('admin')),
);
?>

<h1>Update PasswordStatuses <?php echo $model->passwordStatusID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>