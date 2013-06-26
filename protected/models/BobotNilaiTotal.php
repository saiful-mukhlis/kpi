<?php

/**
 * This is the model class for table "bobot_nilai_total".
 *
 * The followings are the available columns in table 'bobot_nilai_total':
 * @property integer $id
 * @property integer $periodeid
 * @property integer $b1
 * @property integer $b2
 *
 * The followings are the available model relations:
 * @property Periode $periode
 */
class BobotNilaiTotal extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BobotNilaiTotal the static model class
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
		return 'bobot_nilai_total';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('periodeid, b1, b2', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, periodeid, b1, b2', 'safe', 'on'=>'search'),
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
			'b1' => 'B1',
			'b2' => 'B2',
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
		$criteria->compare('b1',$this->b1);
		$criteria->compare('b2',$this->b2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}