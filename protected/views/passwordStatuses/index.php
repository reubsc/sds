<?php
/* @var $this PasswordStatusesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Password Statuses',
);

$this->menu=array(
	array('label'=>'Create PasswordStatuses', 'url'=>array('create')),
	array('label'=>'Manage PasswordStatuses', 'url'=>array('admin')),
);
?>

<h1>Password Statuses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
