<?php

/**
 * This is the model class for table "members".
 *
 * The followings are the available columns in table 'members':
 * @property string $memberID
 * @property string $regionID
 * @property string $membershipTypeID
 * @property string $memberName
 * @property string $dialCode
 * @property string $root_domain
 * @property string $abbrv
 * @property string $ISO_CODE
 * @property string $notes
 * @property string $insertedBy
 * @property string $dateCreated
 * @property string $updatedBy
 * @property string $dateModified
 *
 * The followings are the available model relations:
 * @property MembershipTypes $membershipType
 * @property Regions $region
 */
class Members extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'members';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('regionID, membershipTypeID, memberName, notes', 'required'),
			array('regionID, membershipTypeID', 'length', 'max'=>11),
			array('memberName', 'length', 'max'=>100),
			array('dialCode, ISO_CODE', 'length', 'max'=>5),
			array('root_domain, abbrv', 'length', 'max'=>4),
			array('notes', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('memberID, regionID, membershipTypeID, memberName, dialCode, root_domain, abbrv, ISO_CODE, notes, insertedBy, dateCreated, updatedBy, dateModified', 'safe', 'on'=>'search'),
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
			'membershipType' => array(self::BELONGS_TO, 'MembershipTypes', 'membershipTypeID'),
			'region' => array(self::BELONGS_TO, 'Regions', 'regionID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'memberID' => 'Member',
			'regionID' => 'Region',
			'membershipTypeID' => 'Membership Type',
			'memberName' => 'Member Name',
			'dialCode' => 'Dial Code',
			'root_domain' => 'Root Domain',
			'abbrv' => 'Abbrv',
			'ISO_CODE' => 'Iso Code',
			'notes' => 'Notes',
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

		$criteria->compare('memberID',$this->memberID,true);
		$criteria->compare('regionID',$this->regionID,true);
		$criteria->compare('membershipTypeID',$this->membershipTypeID,true);
		$criteria->compare('memberName',$this->memberName,true);
		$criteria->compare('dialCode',$this->dialCode,true);
		$criteria->compare('root_domain',$this->root_domain,true);
		$criteria->compare('abbrv',$this->abbrv,true);
		$criteria->compare('ISO_CODE',$this->ISO_CODE,true);
		$criteria->compare('notes',$this->notes,true);
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
	 * @return Members the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
