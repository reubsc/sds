<?php
/* @var $this MemberDetailsController */
/* @var $model MemberDetails */

$this->breadcrumbs=array(
	'Member Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MemberDetails', 'url'=>array('index')),
	array('label'=>'Manage MemberDetails', 'url'=>array('admin')),
);
?>

<h1>Create MemberDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>