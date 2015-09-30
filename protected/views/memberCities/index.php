<?php
/* @var $this MemberCitiesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Member Cities',
);

$this->menu=array(
	array('label'=>'Create MemberCities', 'url'=>array('create')),
	array('label'=>'Manage MemberCities', 'url'=>array('admin')),
);
?>

<h1>Member Cities</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
