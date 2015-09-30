<?php
/* @var $this MemberDetailsController */
/* @var $model MemberDetails */

$this->breadcrumbs=array(
	'Member Details'=>array('index'),
	$model->memberDetailID,
);

$this->menu=array(
	array('label'=>'List MemberDetails', 'url'=>array('index')),
	array('label'=>'Create MemberDetails', 'url'=>array('create')),
	array('label'=>'Update MemberDetails', 'url'=>array('update', 'id'=>$model->memberDetailID)),
	array('label'=>'Delete MemberDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->memberDetailID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MemberDetails', 'url'=>array('admin')),
);
?>

<h1>View MemberDetails #<?php echo $model->memberDetailID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'memberDetailID',
                array(
                    'name'=>'memberID',
                    'value'=>$model->member->memberName
                ),
                array(
                    'name'=>'govermentTypeID',
                    'value'=>$model->govermentType->govermentTypeName
                ),
		'capital',
		'population',
		'grossDomesticProduct',
		'numberOfTelephoneLines',
		'numberOfMobileLines',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
