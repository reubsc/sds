<?php
/* @var $this GroupTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Group Types',
);

$this->menu=array(
	array('label'=>'Create GroupTypes', 'url'=>array('create')),
	array('label'=>'Manage GroupTypes', 'url'=>array('admin')),
);
?>

<h1>Group Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
