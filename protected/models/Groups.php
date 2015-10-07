<?php

/**
 * This is the model class for table "groups".
 *
 * The followings are the available columns in table 'groups':
 * @property string $groupID
 * @property string $groupTypeID
 * @property string $groupName
 * @property string $description
 * @property integer $active
 * @property string $dateCreated
 * @property integer $insertedBy
 * @property string $dateModified
 * @property integer $updatedBy
 *
 * The followings are the available model relations:
 * @property GroupTypes $groupType
 */
class Groups extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'groups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('groupTypeID, active', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('groupTypeID', 'length', 'max'=>5),
			array('groupName', 'length', 'max'=>45),
			array('description', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('groupID, groupTypeID, groupName, description, active, dateCreated, insertedBy, dateModified, updatedBy', 'safe', 'on'=>'search'),
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
			'groupType' => array(self::BELONGS_TO, 'GroupTypes', 'groupTypeID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'groupID' => 'Group',
			'groupTypeID' => 'Group Type',
			'groupName' => 'Group Name',
			'description' => 'Description',
			'active' => 'Active',
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

		$criteria->compare('groupID',$this->groupID,true);
		$criteria->compare('groupTypeID',$this->groupTypeID,true);
		$criteria->compare('groupName',$this->groupName,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('active',$this->active);
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
	 * @return Groups the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
