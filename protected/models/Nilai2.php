<?php

/**
 * This is the model class for table "nilai2".
 *
 * The followings are the available columns in table 'nilai2':
 * @property integer $id
 * @property string $cv
 * @property string $note
 * @property integer $bobot
 */
class Nilai2 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nilai2 the static model class
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
		return 'nilai2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cv', 'required'),
			array('bobot', 'numerical', 'integerOnly'=>true),
			array('cv', 'length', 'max'=>100),
			array('note', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cv, note, bobot', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'cv' => 'Cv',
			'note' => 'Note',
			'bobot' => 'Bobot',
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
		$criteria->compare('cv',$this->cv,true);
		$criteria->compare('note',$this->note,true);
		$criteria->compare('bobot',$this->bobot);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}