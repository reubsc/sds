<?php
/* @var $this SalutationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Salutations',
);

$this->menu=array(
	array('label'=>'Create Salutations', 'url'=>array('create')),
	array('label'=>'Manage Salutations', 'url'=>array('admin')),
);
?>

<h1>Salutations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
