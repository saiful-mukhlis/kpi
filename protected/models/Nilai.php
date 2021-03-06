<?php

/**
 * This is the model class for table "nilai".
 *
 * The followings are the available columns in table 'nilai':
 * @property integer $id
 * @property integer $periodeid
 * @property integer $devisiid
 * @property string $kra
 *
 * The followings are the available model relations:
 * @property Periode $periode
 * @property Devisi $devisi
 * @property NilaiTugas[] $nilaiTugases
 */
class Nilai extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nilai the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periodeid, devisiid, kra', 'required'),
			array('periodeid, devisiid', 'numerical', 'integerOnly'=>true),
			array('kra', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, periodeid, devisiid, kra', 'safe', 'on'=>'search'),
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
			'periode' => array(self::BELONGS_TO, 'Periode', 'periodeid'),
			'devisi' => array(self::BELONGS_TO, 'Devisi', 'devisiid'),
			'nilaiTugases' => array(self::HAS_MANY, 'NilaiTugas', 'nilaiid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'periodeid' => 'Periodeid',
			'devisiid' => 'Devisiid',
			'kra' => 'Kra',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('periodeid',$this->periodeid);
		$criteria->compare('devisiid',$this->devisiid);
		$criteria->compare('kra',$this->kra,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}