<?php
/* @var $this MemberCitiesController */
/* @var $model MemberCities */

$this->breadcrumbs=array(
	'Member Cities'=>array('index'),
	$model->memberCityID,
);

$this->menu=array(
	array('label'=>'List MemberCities', 'url'=>array('index')),
	array('label'=>'Create MemberCities', 'url'=>array('create')),
	array('label'=>'Update MemberCities', 'url'=>array('update', 'id'=>$model->memberCityID)),
	array('label'=>'Delete MemberCities', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->memberCityID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MemberCities', 'url'=>array('admin')),
);
?>

<h1>View MemberCities #<?php echo $model->memberCityID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'memberCityID',
                array(
                    'name'=>'memberID',
                    'value'=> $model->member->memberName),
		'memberCityName',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
