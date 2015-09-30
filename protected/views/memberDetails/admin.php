<?php
/* @var $this MemberDetailsController */
/* @var $model MemberDetails */

$this->breadcrumbs=array(
	'Member Details'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List MemberDetails', 'url'=>array('index')),
	array('label'=>'Create MemberDetails', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#member-details-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Member Details</h1>

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
	'id'=>'member-details-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'memberDetailID',
                 array(
                    'name'=>'memberID',
                    'value'=> '$data->member->memberName'
                ),
                array(
                    'name'=>'govermentTypeID',
                    'value'=> '$data->govermentType->govermentTypeName'
                ),
		'capital',
		'population',
		'grossDomesticProduct',
		/*
		'numberOfTelephoneLines',
		'numberOfMobileLines',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
