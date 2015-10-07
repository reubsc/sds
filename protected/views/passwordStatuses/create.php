<?php
/* @var $this PasswordStatusesController */
/* @var $model PasswordStatuses */

$this->breadcrumbs=array(
	'Password Statuses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PasswordStatuses', 'url'=>array('index')),
	array('label'=>'Manage PasswordStatuses', 'url'=>array('admin')),
);
?>

<h1>Create PasswordStatuses</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>