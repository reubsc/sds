<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $userID
 * @property string $organizationID
 * @property string $userName
 * @property string $fullNames
 * @property string $emailAddress
 * @property string $IDNumber
 * @property string $MSISDN
 * @property string $canAccessUI
 * @property string $password
 * @property integer $passwordAttempts
 * @property string $passwordStatusID
 * @property string $datePasswordChanged
 * @property integer $active
 * @property string $dateActivated
 * @property string $dateCreated
 * @property string $dateModified
 * @property integer $updatedBy
 * @property integer $createdBy
 *
 * The followings are the available model relations:
 * @property Organizations $organization
 * @property PasswordStatuses $passwordStatus
 */
class Users extends Webapp1ActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('organizationID, passwordStatusID', 'required'),
			array('passwordAttempts, active', 'numerical', 'integerOnly'=>true),
			array('organizationID, passwordStatusID', 'length', 'max'=>11),
			array('userName', 'length', 'max'=>50),
			array('fullNames, emailAddress', 'length', 'max'=>120),
			array('IDNumber', 'length', 'max'=>30),
			array('MSISDN', 'length', 'max'=>15),
			array('canAccessUI', 'length', 'max'=>1),
			array('password', 'length', 'max'=>150),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('userID, organizationID, userName, fullNames, emailAddress, IDNumber, MSISDN, canAccessUI, password, passwordAttempts, passwordStatusID, datePasswordChanged, active, dateActivated, dateCreated, dateModified, updatedBy, createdBy', 'safe', 'on'=>'search'),
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
			'organization' => array(self::BELONGS_TO, 'Organizations', 'organizationID'),
			'passwordStatus' => array(self::BELONGS_TO, 'PasswordStatuses', 'passwordStatusID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'userID' => 'User',
			'organizationID' => 'Organization',
			'userName' => 'User Name',
			'fullNames' => 'Full Names',
			'emailAddress' => 'Email Address',
			'IDNumber' => 'Idnumber',
			'MSISDN' => 'Msisdn',
			'canAccessUI' => 'Can Access Ui',
			'password' => 'Password',
			'passwordAttempts' => 'Password Attempts',
			'passwordStatusID' => 'Password Status',
			'datePasswordChanged' => 'Date Password Changed',
			'active' => 'Active',
			'dateActivated' => 'Date Activated',
			'dateCreated' => 'Date Created',
			'dateModified' => 'Date Modified',
			'updatedBy' => 'Updated By',
			'createdBy' => 'Created By',
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

		$criteria->compare('userID',$this->userID,true);
		$criteria->compare('organizationID',$this->organizationID,true);
		$criteria->compare('userName',$this->userName,true);
		$criteria->compare('fullNames',$this->fullNames,true);
		$criteria->compare('emailAddress',$this->emailAddress,true);
		$criteria->compare('IDNumber',$this->IDNumber,true);
		$criteria->compare('MSISDN',$this->MSISDN,true);
		$criteria->compare('canAccessUI',$this->canAccessUI,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('passwordAttempts',$this->passwordAttempts);
		$criteria->compare('passwordStatusID',$this->passwordStatusID,true);
		$criteria->compare('datePasswordChanged',$this->datePasswordChanged,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('dateActivated',$this->dateActivated,true);
		$criteria->compare('dateCreated',$this->dateCreated,true);
		$criteria->compare('dateModified',$this->dateModified,true);
		$criteria->compare('updatedBy',$this->updatedBy);
		$criteria->compare('createdBy',$this->createdBy);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
