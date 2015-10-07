<?php
/* @var $this UserGroupsController */
/* @var $model UserGroups */

$this->breadcrumbs=array(
	'User Groups'=>array('index'),
	$model->userGroupID,
);

$this->menu=array(
	array('label'=>'List UserGroups', 'url'=>array('index')),
	array('label'=>'Create UserGroups', 'url'=>array('create')),
	array('label'=>'Update UserGroups', 'url'=>array('update', 'id'=>$model->userGroupID)),
	array('label'=>'Delete UserGroups', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->userGroupID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage UserGroups', 'url'=>array('admin')),
);
?>

<h1>View UserGroups #<?php echo $model->userGroupID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'userGroupID',
                array(
                    'name'=>'userName',
                    'value'=>$model->user->userName
                ),
		array(
                    'name'=>'groupName',
                    'value'=>$model->group->groupName
                ),
		'active',
		'insertedBy',
		'dateCreated',
		'updatedBy',
		'dateModified',
	),
)); ?>
