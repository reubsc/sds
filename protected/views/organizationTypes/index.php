<?php
/* @var $this OrganizationTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Organization Types',
);

$this->menu=array(
	array('label'=>'Create OrganizationTypes', 'url'=>array('create')),
	array('label'=>'Manage OrganizationTypes', 'url'=>array('admin')),
);
?>

<h1>Organization Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
