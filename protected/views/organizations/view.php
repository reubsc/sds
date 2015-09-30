<?php
/* @var $this OrganizationsController */
/* @var $model Organizations */

$this->breadcrumbs=array(
	'Organizations'=>array('index'),
	$model->organizationID,
);

$this->menu=array(
	array('label'=>'List Organizations', 'url'=>array('index')),
	array('label'=>'Create Organizations', 'url'=>array('create')),
	array('label'=>'Update Organizations', 'url'=>array('update', 'id'=>$model->organizationID)),
	array('label'=>'Delete Organizations', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->organizationID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Organizations', 'url'=>array('admin')),
);
?>

<h1>View Organizations #<?php echo $model->organizationID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'organizationID',
                array(
                    'name'=>'memberID',
                    'value'=>$model->member->memberName
                ),
                array(
                    'name'=>'organizationTypeName',
                    'value'=>$model->organizationType->organizationTypeName
                ),
		'organizationName',
		'organizationDesc',
		'organizationCode',
		'MSISDN',
		'otherMSISDN',
		'telephoneNo',
		'otherTelephoneNo',
		'fax',
		'postalAddress',
		'physicalAddress',
		'emailAddress',
		'twitter',
		'facebook',
		'website',
		'linkedIn',
		'youtube',
		'passwordExpiryAge',
		'adminMode',
		'active',
		'activityHistory',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
