<?php
/* @var $this TblAuthItemController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Auth Items',
);

$this->menu=array(
	array('label'=>'Create TblAuthItem', 'url'=>array('create')),
	array('label'=>'Manage TblAuthItem', 'url'=>array('admin')),
);
?>

<h1>Tbl Auth Items</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
