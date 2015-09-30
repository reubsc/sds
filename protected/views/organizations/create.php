<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs=array(
	'Organizations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Organizations', 'url'=>array('index')),
	array('label'=>'Manage Organizations', 'url'=>array('admin')),
);
?>

<h1>Create Organizations</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>