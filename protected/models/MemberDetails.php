<?php

/**
 * This is the model class for table "memberDetails".
 *
 * The followings are the available columns in table 'memberDetails':
 * @property string $memberDetailID
 * @property string $memberID
 * @property string $govermentTypeID
 * @property string $capital
 * @property string $population
 * @property string $grossDomesticProduct
 * @property string $numberOfTelephoneLines
 * @property string $numberOfMobileLines
 * @property string $insertedBy
 * @property string $dateCreated
 * @property string $updatedBy
 * @property string $dateModified
 *
 * The followings are the available model relations:
 * @property GovermentTypes $govermentType
 * @property Members $member
 */
class MemberDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'memberDetails';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('', 'required'),
			array('memberID, govermentTypeID', 'length', 'max'=>11),
			array('capital', 'length', 'max'=>120),
			array('population, grossDomesticProduct, numberOfTelephoneLines, numberOfMobileLines', 'length', 'max'=>15),
			array('insertedBy, updatedBy', 'length', 'max'=>10),
			array('dateCreated', 'safe'),
                        array('dateCreated, dateModified', 'default',
                            'value'=> new CDbExpression('NOW()'),
                            'setOnEmpty'=>false,
                            'on'=> 'insert'),
                        array('dateModified', 'default',
                            'value'=> new CDbExpression('NOW()'),
                            'setOnEmpty'=>false,
                            'on'=> 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('memberDetailID, memberID, govermentTypeID, capital, population, grossDomesticProduct, numberOfTelephoneLines, numberOfMobileLines, insertedBy, dateCreated, updatedBy, dateModified', 'safe', 'on'=>'search'),
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
			'govermentType' => array(self::BELONGS_TO, 'GovermentTypes', 'govermentTypeID'),
			'member' => array(self::BELONGS_TO, 'Members', 'memberID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'memberDetailID' => 'Member Detail',
			'memberID' => 'Member',
			'govermentTypeID' => 'Goverment Type',
			'capital' => 'Capital',
			'population' => 'Population',
			'grossDomesticProduct' => 'Gross Domestic Product',
			'numberOfTelephoneLines' => 'Number Of Telephone Lines',
			'numberOfMobileLines' => 'Number Of Mobile Lines',
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

		$criteria->compare('memberDetailID',$this->memberDetailID,true);
		$criteria->compare('memberID',$this->memberID,true);
		$criteria->compare('govermentTypeID',$this->govermentTypeID,true);
		$criteria->compare('capital',$this->capital,true);
		$criteria->compare('population',$this->population,true);
		$criteria->compare('grossDomesticProduct',$this->grossDomesticProduct,true);
		$criteria->compare('numberOfTelephoneLines',$this->numberOfTelephoneLines,true);
		$criteria->compare('numberOfMobileLines',$this->numberOfMobileLines,true);
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
	 * @return MemberDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
