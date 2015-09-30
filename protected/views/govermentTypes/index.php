<?php
/* @var $this GovermentTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Goverment Types',
);

$this->menu=array(
	array('label'=>'Create GovermentTypes', 'url'=>array('create')),
	array('label'=>'Manage GovermentTypes', 'url'=>array('admin')),
);
?>

<h1>Goverment Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
