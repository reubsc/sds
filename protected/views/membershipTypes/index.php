<?php
/* @var $this MembershipTypesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Membership Types',
);

$this->menu=array(
	array('label'=>'Create MembershipTypes', 'url'=>array('create')),
	array('label'=>'Manage MembershipTypes', 'url'=>array('admin')),
);
?>

<h1>Membership Types</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
