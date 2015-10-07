<?php

/**
 * This is the model class for table "userGroups".
 *
 * The followings are the available columns in table 'userGroups':
 * @property string $userGroupID
 * @property string $userID
 * @property string $groupID
 * @property integer $active
 * @property string $insertedBy
 * @property string $dateCreated
 * @property string $updatedBy
 * @property string $dateModified
 *
 * The followings are the available model relations:
 * @property Groups $group
 * @property Users $user
 */
class UserGroups extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'userGroups';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userID, groupID, active', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('userID, groupID', 'length', 'max'=>11),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userGroupID, userID, groupID, active, insertedBy, dateCreated, updatedBy, dateModified', 'safe', 'on'=>'search'),
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
			'group' => array(self::BELONGS_TO, 'Groups', 'groupID'),
			'user' => array(self::BELONGS_TO, 'Users', 'userID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userGroupID' => 'User Group',
			'userID' => 'User',
			'groupID' => 'Group',
			'active' => 'Active',
			'insertedBy' => 'Inserted By',
			'dateCreated' => 'Date Created',
			'updatedBy' => 'Updated By',
			'dateModified' => 'Date Modified',
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

		$criteria->compare('userGroupID',$this->userGroupID,true);
		$criteria->compare('userID',$this->userID,true);
		$criteria->compare('groupID',$this->groupID,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('insertedBy',$this->insertedBy,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('updatedBy',$this->updatedBy,true);
		$criteria->compare('dateModified',$this->dateModified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return UserGroups the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
