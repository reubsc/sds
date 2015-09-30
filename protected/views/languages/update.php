<?php
/* @var $this LanguagesController */
/* @var $model Languages */

$this->breadcrumbs=array(
	'Languages'=>array('index'),
	$model->languageID=>array('view','id'=>$model->languageID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Languages', 'url'=>array('index')),
	array('label'=>'Create Languages', 'url'=>array('create')),
	array('label'=>'View Languages', 'url'=>array('view', 'id'=>$model->languageID)),
	array('label'=>'Manage Languages', 'url'=>array('admin')),
);
?>

<h1>Update Languages <?php echo $model->languageID; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>