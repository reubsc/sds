<?php
/* @var $this OrganizationTypesController */
/* @var $model OrganizationTypes */

$this->breadcrumbs=array(
	'Organization Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrganizationTypes', 'url'=>array('index')),
	array('label'=>'Manage OrganizationTypes', 'url'=>array('admin')),
);
?>

<h1>Create OrganizationTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>