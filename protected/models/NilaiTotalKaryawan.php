<?php

/**
 * This is the model class for table "nilai_total_karyawan".
 *
 * The followings are the available columns in table 'nilai_total_karyawan':
 * @property integer $id
 * @property integer $karyawanid
 * @property integer $periodeid
 * @property integer $n1
 * @property integer $n2
 *
 * The followings are the available model relations:
 * @property Karyawan $karyawan
 * @property Periode $periode
 */
class NilaiTotalKaryawan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NilaiTotalKaryawan the static model class
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
		return 'nilai_total_karyawan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('karyawanid, periodeid', 'required'),
			array('karyawanid, periodeid, n1, n2', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, karyawanid, periodeid, n1, n2', 'safe', 'on'=>'search'),
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
			'karyawanid' => 'Karyawanid',
			'periodeid' => 'Periodeid',
			'n1' => 'N1',
			'n2' => 'N2',
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
		$criteria->compare('periodeid',$this->periodeid);
		$criteria->compare('n1',$this->n1);
		$criteria->compare('n2',$this->n2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}