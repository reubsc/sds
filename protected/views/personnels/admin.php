<?php
/* @var $this PersonnelsController */
/* @var $model Personnels */

$this->breadcrumbs=array(
	'Personnels'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Personnels', 'url'=>array('index')),
	array('label'=>'Create Personnels', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#personnels-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Personnels</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'personnels-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'personnelID',
                array(
                    'name'=>'salutationID',
                    'value'=>'$data->salutation->abbreviation'
                ),
		'surname',
                'otherNames',
		array(
                    'name'=>'organizationID',
                    'value'=>'$data->organization->organizationName'
                ),
		array(
                    'name'=>'languageID',
                    'value'=>'$data->language->languageName'
                ),
		array(
                        'name'=>'personnelTypeID',
                        'value'=>'$data->personnelType->personnelTypeName'
                ),
		
		/*
		'otherNames',
		'genderID',
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
