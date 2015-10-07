<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class Webapp1ActiveRecord extends CActiveRecord
{
/**
* Prepares create_user_id and update_user_id attributes before
saving.
*/
protected function beforeSave()
{
    if(null !== Yii::app()->user)
        $id=Yii::app()->user->id;
    else
        $id=1;
    if($this->isNewRecord)
        $this->insertedBy=$id;
        $this->updatedBy=$id;
        return parent::beforeSave();
}
/**
* Attaches the timestamp behavior to update our create and update
times
*/
public function behaviors()
{
    return array(
        'CTimestampBehavior' => array(
        'class' => 'zii.behaviors.CTimestampBehavior',
        'createAttribute' => 'dateCreated',
        'updateAttribute' => 'dateModified',
        'updateAttribute'=>'dateActivated',
        'updateAttribute'=>'datePasswordChanged',
        
        'setUpdateOnCreate' => true,
        ),
    );
}
}

