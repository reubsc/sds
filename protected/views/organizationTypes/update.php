<?php
/* @var $this OrganizationTypesController */
/* @var $model OrganizationTypes */

$this->breadcrumbs=array(
	'Organization Types'=>array('index'),
	$model->organizationTypeID=>array('view','id'=>$model->organizationTypeID),
	'Update',
);

$this->menu=array(
	array('label'=>'List OrganizationTypes', 'url'=>array('index')),
	array('label'=>'Create OrganizationTypes', 'url'=>array('create')),
	array('label'=>'View OrganizationTypes', 'url'=>array('view', 'id'=>$model->organizationTypeID)),
	array('label'=>'Manage OrganizationTypes', 'url'=>array('admin')),
);
?>

<h1>Update OrganizationTypes <?php echo $model->organizationTypeID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>