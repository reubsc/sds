<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs=array(
	'Organizations'=>array('index'),
	$model->organizationID=>array('view','id'=>$model->organizationID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Organizations', 'url'=>array('index')),
	array('label'=>'Create Organizations', 'url'=>array('create')),
	array('label'=>'View Organizations', 'url'=>array('view', 'id'=>$model->organizationID)),
	array('label'=>'Manage Organizations', 'url'=>array('admin')),
);
?>

<h1>Update Organizations <?php echo $model->organizationID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>