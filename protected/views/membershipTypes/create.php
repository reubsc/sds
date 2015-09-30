<?php
/* @var $this MembershipTypesController */
/* @var $model MembershipTypes */

$this->breadcrumbs=array(
	'Membership Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MembershipTypes', 'url'=>array('index')),
	array('label'=>'Manage MembershipTypes', 'url'=>array('admin')),
);
?>

<h1>Create MembershipTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>