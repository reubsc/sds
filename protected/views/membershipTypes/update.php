<?php
/* @var $this MembershipTypesController */
/* @var $model MembershipTypes */

$this->breadcrumbs=array(
	'Membership Types'=>array('index'),
	$model->membershipTypeID=>array('view','id'=>$model->membershipTypeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MembershipTypes', 'url'=>array('index')),
	array('label'=>'Create MembershipTypes', 'url'=>array('create')),
	array('label'=>'View MembershipTypes', 'url'=>array('view', 'id'=>$model->membershipTypeID)),
	array('label'=>'Manage MembershipTypes', 'url'=>array('admin')),
);
?>

<h1>Update MembershipTypes <?php echo $model->membershipTypeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>