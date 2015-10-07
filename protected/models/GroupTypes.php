<?php

/**
 * This is the model class for table "groupTypes".
 *
 * The followings are the available columns in table 'groupTypes':
 * @property string $groupTypeID
 * @property string $groupTypeName
 * @property string $description
 * @property integer $active
 * @property string $activityHistory
 * @property string $dateCreated
 * @property integer $insertedBy
 * @property string $dateModified
 * @property integer $updatedBy
 */
class GroupTypes extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'groupTypes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('active', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('groupTypeName', 'length', 'max'=>50),
			array('description', 'length', 'max'=>100),
			array('activityHistory', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('groupTypeID, groupTypeName, description, active, activityHistory, dateCreated, insertedBy, dateModified, updatedBy', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'groupTypeID' => 'Group Type',
			'groupTypeName' => 'Group Type Name',
			'description' => 'Description',
			'active' => 'Active',
			'activityHistory' => 'Activity History',
			'dateCreated' => 'Date Created',
			'insertedBy' => 'Inserted By',
			'dateModified' => 'Date Modified',
			'updatedBy' => 'Updated By',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('groupTypeID',$this->groupTypeID,true);
		$criteria->compare('groupTypeName',$this->groupTypeName,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('activityHistory',$this->activityHistory,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('insertedBy',$this->insertedBy);
		$criteria->compare('dateModified',$this->dateModified,true);
		$criteria->compare('updatedBy',$this->updatedBy);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GroupTypes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
