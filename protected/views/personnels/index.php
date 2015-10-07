<?php
/* @var $this PersonnelsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Personnels',
);

$this->menu=array(
	array('label'=>'Create Personnels', 'url'=>array('create')),
	array('label'=>'Manage Personnels', 'url'=>array('admin')),
);
?>

<h1>Personnels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
