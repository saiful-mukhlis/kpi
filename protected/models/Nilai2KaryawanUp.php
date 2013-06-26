<?php

/**
 * This is the model class for table "nilai2_karyawan_up".
 *
 * The followings are the available columns in table 'nilai2_karyawan_up':
 * @property integer $id
 * @property integer $karyawanid
 * @property integer $upid
 * @property integer $n1
 * @property integer $n2
 * @property integer $n3
 * @property integer $n4
 * @property integer $n5
 *
 * The followings are the available model relations:
 * @property Karyawan $karyawan
 * @property Karyawan $up
 */
class Nilai2KaryawanUp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Nilai2KaryawanUp the static model class
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
		return 'nilai2_karyawan_up';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('karyawanid', 'required'),
			array('karyawanid, upid, n1, n2, n3, n4, n5', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, karyawanid, upid, n1, n2, n3, n4, n5', 'safe', 'on'=>'search'),
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
			'karyawan' => array(self::BELONGS_TO, 'Karyawan', 'karyawanid'),
			'up' => array(self::BELONGS_TO, 'Karyawan', 'upid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'karyawanid' => 'Karyawanid',
			'upid' => 'Upid',
			'n1' => 'N1',
			'n2' => 'N2',
			'n3' => 'N3',
			'n4' => 'N4',
			'n5' => 'N5',
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
		$criteria->compare('karyawanid',$this->karyawanid);
		$criteria->compare('upid',$this->upid);
		$criteria->compare('n1',$this->n1);
		$criteria->compare('n2',$this->n2);
		$criteria->compare('n3',$this->n3);
		$criteria->compare('n4',$this->n4);
		$criteria->compare('n5',$this->n5);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}