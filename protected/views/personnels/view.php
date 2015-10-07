<?php
/* @var $this PersonnelsController */
/* @var $model Personnels */

$this->breadcrumbs=array(
	'Personnels'=>array('index'),
	$model->personnelID,
);

$this->menu=array(
	array('label'=>'List Personnels', 'url'=>array('index')),
	array('label'=>'Create Personnels', 'url'=>array('create')),
	array('label'=>'Update Personnels', 'url'=>array('update', 'id'=>$model->personnelID)),
	array('label'=>'Delete Personnels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->personnelID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personnels', 'url'=>array('admin')),
);
?>

<h1>View Personnels #<?php echo $model->personnelID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'personnelID',
		array(
                    'name'=>'organizationID',
                    'value'=> $model->organization->organizationName
                ),
		array(
                    'name'=>'languageID',
                    'value'=>$model->language->languageName
                ),
		array(
                    'name'=>'personnelTypeID',
                    'value'=>$model->personnelType->personnelTypeName
                ),
		array(
                    'name'=>'salutationID',
                    'value'=>$model->salutation->salutationName
                ),
		'surname',
		'otherNames',
		array(
                    'name'=>'genderID',
                    'value'=>$model->gender->genderName
                ),
		'IDNumber',
		'MSISDN',
		'otherMSISDN',
		'telephoneNo',
		'otherTelephoneNo',
		'fax',
		'postalAddress',
		'physicalAddress',
		'emailAddress',
		'columnA',
		'columnB',
		'active',
		'dateActivated',
		'dateCreated',
		'insertedBy',
		'dateModified',
		'updatedBy',
	),
)); ?>
