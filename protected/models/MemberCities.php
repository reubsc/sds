<?php

/**
 * This is the model class for table "memberCities".
 *
 * The followings are the available columns in table 'memberCities':
 * @property string $memberCityID
 * @property string $memberID
 * @property string $memberCityName
 * @property string $insertedBy
 * @property string $dateCreated
 * @property string $updatedBy
 * @property string $dateModified
 *
 * The followings are the available model relations:
 * @property Members $member
 */
class MemberCities extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'memberCities';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('dateModified', 'required'),
			array('memberID', 'length', 'max'=>11),
			array('memberCityName', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('memberCityID, memberID, memberCityName, insertedBy, dateCreated, updatedBy, dateModified', 'safe', 'on'=>'search'),
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
			'member' => array(self::BELONGS_TO, 'Members', 'memberID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'memberCityID' => 'Member City',
			'memberID' => 'Member',
			'memberCityName' => 'Member City Name',
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

		$criteria->compare('memberCityID',$this->memberCityID,true);
		$criteria->compare('memberID',$this->memberID,true);
		$criteria->compare('memberCityName',$this->memberCityName,true);
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
	 * @return MemberCities the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
