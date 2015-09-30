<?php
/* @var $this MemberCitiesController */
/* @var $model MemberCities */

$this->breadcrumbs=array(
	'Member Cities'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MemberCities', 'url'=>array('index')),
	array('label'=>'Manage MemberCities', 'url'=>array('admin')),
);
?>

<h1>Create MemberCities</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>