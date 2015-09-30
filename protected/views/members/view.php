<?php
/* @var $this MembersController */
/* @var $model Members */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	$model->memberID,
);

$this->menu=array(
	array('label'=>'List Members', 'url'=>array('index')),
	array('label'=>'Create Members', 'url'=>array('create')),
	array('label'=>'Update Members', 'url'=>array('update', 'id'=>$model->memberID)),
	array('label'=>'Delete Members', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->memberID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Members', 'url'=>array('admin')),
);
?>

<h1>View Members #<?php echo $model->memberID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'memberID',
		array(
                    'name'=>'regionID',
                    'value'=> $model->region->regionName),
                array(
                    'name'=> 'membershipTypeID',
                    'value'=>$model->membershipType->membershipTypeName
                ),
		'memberName',
		'dialCode',
		'root_domain',
		'abbrv',
		'ISO_CODE',
		'notes',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
