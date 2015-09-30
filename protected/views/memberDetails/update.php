<?php
/* @var $this MemberDetailsController */
/* @var $model MemberDetails */

$this->breadcrumbs=array(
	'Member Details'=>array('index'),
	$model->memberDetailID=>array('view','id'=>$model->memberDetailID),
	'Update',
);

$this->menu=array(
	array('label'=>'List MemberDetails', 'url'=>array('index')),
	array('label'=>'Create MemberDetails', 'url'=>array('create')),
	array('label'=>'View MemberDetails', 'url'=>array('view', 'id'=>$model->memberDetailID)),
	array('label'=>'Manage MemberDetails', 'url'=>array('admin')),
);
?>

<h1>Update MemberDetails <?php echo $model->memberDetailID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>