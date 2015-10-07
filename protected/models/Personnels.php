<?php

/**
 * This is the model class for table "personnels".
 *
 * The followings are the available columns in table 'personnels':
 * @property string $personnelID
 * @property string $organizationID
 * @property string $languageID
 * @property string $personnelTypeID
 * @property string $salutationID
 * @property string $surname
 * @property string $otherNames
 * @property string $genderID
 * @property string $IDNumber
 * @property string $MSISDN
 * @property string $otherMSISDN
 * @property string $telephoneNo
 * @property string $otherTelephoneNo
 * @property string $fax
 * @property string $postalAddress
 * @property string $physicalAddress
 * @property string $emailAddress
 * @property string $columnA
 * @property string $columnB
 * @property integer $active
 * @property string $dateActivated
 * @property string $dateCreated
 * @property string $insertedBy
 * @property string $dateModified
 * @property string $updatedBy
 *
 * The followings are the available model relations:
 * @property Genders $gender
 * @property Salutations $salutation
 * @property Languages $language
 * @property Organizations $organization
 * @property PersonnelTypes $personnelType
 */
class Personnels extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'personnels';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('organizationID, languageID, personnelTypeID, salutationID, surname, otherNames, genderID, emailAddress', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('organizationID, languageID, personnelTypeID, salutationID, genderID', 'length', 'max'=>11),
			array('surname', 'length', 'max'=>60),
			array('otherNames', 'length', 'max'=>120),
			array('IDNumber', 'length', 'max'=>15),
			array('MSISDN, otherMSISDN', 'length', 'max'=>20),
			array('telephoneNo, otherTelephoneNo', 'length', 'max'=>30),
			array('fax, columnA, columnB', 'length', 'max'=>100),
			array('postalAddress', 'length', 'max'=>160),
			array('physicalAddress, emailAddress', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('personnelID, organizationID, languageID, personnelTypeID, salutationID, surname, otherNames, genderID, IDNumber, MSISDN, otherMSISDN, telephoneNo, otherTelephoneNo, fax, postalAddress, physicalAddress, emailAddress, columnA, columnB, active, dateActivated, dateCreated, insertedBy, dateModified, updatedBy', 'safe', 'on'=>'search'),
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
			'gender' => array(self::BELONGS_TO, 'Genders', 'genderID'),
			'salutation' => array(self::BELONGS_TO, 'Salutations', 'salutationID'),
			'language' => array(self::BELONGS_TO, 'Languages', 'languageID'),
			'organization' => array(self::BELONGS_TO, 'Organizations', 'organizationID'),
			'personnelType' => array(self::BELONGS_TO, 'PersonnelTypes', 'personnelTypeID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personnelID' => 'Personnel',
			'organizationID' => 'Organization',
			'languageID' => 'Language',
			'personnelTypeID' => 'Personnel Type',
			'salutationID' => 'Salutation',
			'surname' => 'Surname',
			'otherNames' => 'Other Names',
			'genderID' => 'Gender',
			'IDNumber' => 'Idnumber',
			'MSISDN' => 'Msisdn',
			'otherMSISDN' => 'Other Msisdn',
			'telephoneNo' => 'Telephone No',
			'otherTelephoneNo' => 'Other Telephone No',
			'fax' => 'Fax',
			'postalAddress' => 'Postal Address',
			'physicalAddress' => 'Physical Address',
			'emailAddress' => 'Email Address',
			'columnA' => 'Column A',
			'columnB' => 'Column B',
			'active' => 'Active',
			'dateActivated' => 'Date Activated',
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

		$criteria->compare('personnelID',$this->personnelID,true);
		$criteria->compare('organizationID',$this->organizationID,true);
		$criteria->compare('languageID',$this->languageID,true);
		$criteria->compare('personnelTypeID',$this->personnelTypeID,true);
		$criteria->compare('salutationID',$this->salutationID,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('otherNames',$this->otherNames,true);
		$criteria->compare('genderID',$this->genderID,true);
		$criteria->compare('IDNumber',$this->IDNumber,true);
		$criteria->compare('MSISDN',$this->MSISDN,true);
		$criteria->compare('otherMSISDN',$this->otherMSISDN,true);
		$criteria->compare('telephoneNo',$this->telephoneNo,true);
		$criteria->compare('otherTelephoneNo',$this->otherTelephoneNo,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('postalAddress',$this->postalAddress,true);
		$criteria->compare('physicalAddress',$this->physicalAddress,true);
		$criteria->compare('emailAddress',$this->emailAddress,true);
		$criteria->compare('columnA',$this->columnA,true);
		$criteria->compare('columnB',$this->columnB,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('dateActivated',$this->dateActivated,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('insertedBy',$this->insertedBy,true);
		$criteria->compare('dateModified',$this->dateModified,true);
		$criteria->compare('updatedBy',$this->updatedBy,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Personnels the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
