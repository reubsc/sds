<?php

/**
 * This is the model class for table "organizationTypes".
 *
 * The followings are the available columns in table 'organizationTypes':
 * @property string $organizationTypeID
 * @property string $organizationTypeName
 * @property string $description
 * @property integer $active
 * @property string $insertedBy
 * @property string $dateCreated
 * @property string $updatedBy
 * @property string $dateModified
 */
class OrganizationTypes extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organizationTypes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organizationTypeName, description', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('organizationTypeName', 'length', 'max'=>100),
			array('description', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('organizationTypeID, organizationTypeName, description, active, insertedBy, dateCreated, updatedBy, dateModified', 'safe', 'on'=>'search'),
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
			'organizationTypeID' => 'Organization Type',
			'organizationTypeName' => 'Organization Type Name',
			'description' => 'Description',
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

		$criteria->compare('organizationTypeID',$this->organizationTypeID,true);
		$criteria->compare('organizationTypeName',$this->organizationTypeName,true);
		$criteria->compare('description',$this->description,true);
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
	 * @return OrganizationTypes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
