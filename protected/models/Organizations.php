<?php

/**
 * This is the model class for table "organizations".
 *
 * The followings are the available columns in table 'organizations':
 * @property string $organizationID
 * @property string $memberID
 * @property string $organizationTypeID
 * @property string $organizationName
 * @property string $organizationDesc
 * @property string $organizationCode
 * @property string $MSISDN
 * @property string $otherMSISDN
 * @property string $telephoneNo
 * @property string $otherTelephoneNo
 * @property string $fax
 * @property string $postalAddress
 * @property string $physicalAddress
 * @property string $emailAddress
 * @property string $twitter
 * @property string $facebook
 * @property string $website
 * @property string $linkedIn
 * @property string $youtube
 * @property integer $passwordExpiryAge
 * @property string $adminMode
 * @property integer $active
 * @property string $activityHistory
 * @property integer $insertedBy
 * @property string $dateCreated
 * @property integer $updatedBy
 * @property string $dateModified
 *
 * The followings are the available model relations:
 * @property Members $member
 * @property OrganizationTypes $organizationType
 */
class Organizations extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organizations';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organizationName, organizationCode, MSISDN, otherMSISDN, fax, emailAddress', 'required'),
			array('passwordExpiryAge, active', 'numerical', 'integerOnly'=>true),
			array('memberID, organizationTypeID', 'length', 'max'=>11),
			array('organizationName, organizationCode, fax', 'length', 'max'=>100),
			array('organizationDesc, twitter, facebook, website, linkedIn, youtube', 'length', 'max'=>255),
			array('MSISDN, otherMSISDN', 'length', 'max'=>20),
			array('telephoneNo, otherTelephoneNo', 'length', 'max'=>30),
			array('postalAddress', 'length', 'max'=>160),
			array('physicalAddress, emailAddress', 'length', 'max'=>200),
			array('adminMode', 'length', 'max'=>1),
			array('activityHistory', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('organizationID, memberID, organizationTypeID, organizationName, organizationDesc, organizationCode, MSISDN, otherMSISDN, telephoneNo, otherTelephoneNo, fax, postalAddress, physicalAddress, emailAddress, twitter, facebook, website, linkedIn, youtube, passwordExpiryAge, adminMode, active, activityHistory, insertedBy, dateCreated, updatedBy, dateModified', 'safe', 'on'=>'search'),
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
			'organizationType' => array(self::BELONGS_TO, 'OrganizationTypes', 'organizationTypeID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'organizationID' => 'Organization',
			'memberID' => 'Member',
			'organizationTypeID' => 'Organization Type',
			'organizationName' => 'Organization Name',
			'organizationDesc' => 'Organization Desc',
			'organizationCode' => 'Organization Code',
			'MSISDN' => 'Msisdn',
			'otherMSISDN' => 'Other Msisdn',
			'telephoneNo' => 'Telephone No',
			'otherTelephoneNo' => 'Other Telephone No',
			'fax' => 'Fax',
			'postalAddress' => 'Postal Address',
			'physicalAddress' => 'Physical Address',
			'emailAddress' => 'Email Address',
			'twitter' => 'Twitter',
			'facebook' => 'Facebook',
			'website' => 'Website',
			'linkedIn' => 'Linked In',
			'youtube' => 'Youtube',
			'passwordExpiryAge' => 'Password Expiry Age',
			'adminMode' => 'Admin Mode',
			'active' => 'Active',
			'activityHistory' => 'Activity History',
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

		$criteria->compare('organizationID',$this->organizationID,true);
		$criteria->compare('memberID',$this->memberID,true);
		$criteria->compare('organizationTypeID',$this->organizationTypeID,true);
		$criteria->compare('organizationName',$this->organizationName,true);
		$criteria->compare('organizationDesc',$this->organizationDesc,true);
		$criteria->compare('organizationCode',$this->organizationCode,true);
		$criteria->compare('MSISDN',$this->MSISDN,true);
		$criteria->compare('otherMSISDN',$this->otherMSISDN,true);
		$criteria->compare('telephoneNo',$this->telephoneNo,true);
		$criteria->compare('otherTelephoneNo',$this->otherTelephoneNo,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('postalAddress',$this->postalAddress,true);
		$criteria->compare('physicalAddress',$this->physicalAddress,true);
		$criteria->compare('emailAddress',$this->emailAddress,true);
		$criteria->compare('twitter',$this->twitter,true);
		$criteria->compare('facebook',$this->facebook,true);
		$criteria->compare('website',$this->website,true);
		$criteria->compare('linkedIn',$this->linkedIn,true);
		$criteria->compare('youtube',$this->youtube,true);
		$criteria->compare('passwordExpiryAge',$this->passwordExpiryAge);
		$criteria->compare('adminMode',$this->adminMode,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('activityHistory',$this->activityHistory,true);
		$criteria->compare('insertedBy',$this->insertedBy);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('dateModified',$this->dateModified,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Organizations the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
