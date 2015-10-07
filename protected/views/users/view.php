<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userID,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->userID)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->userID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userID',
		'organizationID',
		'userName',
		'fullNames',
		'emailAddress',
		'IDNumber',
		'MSISDN',
		'canAccessUI',
		'password',
		'passwordAttempts',
		'passwordStatusID',
		'datePasswordChanged',
		'active',
		'dateActivated',
		'dateCreated',
		'dateModified',
		'updatedBy',
		'createdBy',
	),
)); ?>
