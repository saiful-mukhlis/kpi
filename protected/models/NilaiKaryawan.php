<?php

/**
 * This is the model class for table "nilai_karyawan".
 *
 * The followings are the available columns in table 'nilai_karyawan':
 * @property integer $id
 * @property integer $karyawanid
 * @property integer $nilai_tugasid
 * @property integer $realisasi
 * @property integer $skor
 * @property string $skor_akhir
 *
 * The followings are the available model relations:
 * @property NilaiTugas $nilaiTugas
 * @property Karyawan $karyawan
 */
class NilaiKaryawan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return NilaiKaryawan the static model class
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
		return 'nilai_karyawan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('karyawanid, nilai_tugasid', 'required'),
			array('karyawanid, nilai_tugasid, realisasi, skor', 'numerical', 'integerOnly'=>true),
			array('skor_akhir', 'length', 'max'=>12),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, karyawanid, nilai_tugasid, realisasi, skor, skor_akhir', 'safe', 'on'=>'search'),
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
			'nilaiTugas' => array(self::BELONGS_TO, 'NilaiTugas', 'nilai_tugasid'),
			'karyawan' => array(self::BELONGS_TO, 'Karyawan', 'karyawanid'),
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
			'nilai_tugasid' => 'Nilai Tugasid',
			'realisasi' => 'Realisasi',
			'skor' => 'Skor',
			'skor_akhir' => 'Skor Akhir',
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
		$criteria->compare('nilai_tugasid',$this->nilai_tugasid);
		$criteria->compare('realisasi',$this->realisasi);
		$criteria->compare('skor',$this->skor);
		$criteria->compare('skor_akhir',$this->skor_akhir,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}