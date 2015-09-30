<?php
/* @var $this MemberCitiesController */
/* @var $model MemberCities */

$this->breadcrumbs=array(
	'Member Cities'=>array('index'),
	$model->memberCityID=>array('view','id'=>$model->memberCityID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MemberCities', 'url'=>array('index')),
	array('label'=>'Create MemberCities', 'url'=>array('create')),
	array('label'=>'View MemberCities', 'url'=>array('view', 'id'=>$model->memberCityID)),
	array('label'=>'Manage MemberCities', 'url'=>array('admin')),
);
?>

<h1>Update MemberCities <?php echo $model->memberCityID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>