<?php
/* @var $this GendersController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Genders',
);

$this->menu=array(
	array('label'=>'Create Genders', 'url'=>array('create')),
	array('label'=>'Manage Genders', 'url'=>array('admin')),
);
?>

<h1>Genders</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
