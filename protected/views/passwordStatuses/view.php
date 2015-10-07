<?php
/* @var $this PasswordStatusesController */
/* @var $model PasswordStatuses */

$this->breadcrumbs=array(
	'Password Statuses'=>array('index'),
	$model->passwordStatusID,
);

$this->menu=array(
	array('label'=>'List PasswordStatuses', 'url'=>array('index')),
	array('label'=>'Create PasswordStatuses', 'url'=>array('create')),
	array('label'=>'Update PasswordStatuses', 'url'=>array('update', 'id'=>$model->passwordStatusID)),
	array('label'=>'Delete PasswordStatuses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->passwordStatusID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PasswordStatuses', 'url'=>array('admin')),
);
?>

<h1>View PasswordStatuses #<?php echo $model->passwordStatusID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'passwordStatusID',
		'passwordStatus',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
