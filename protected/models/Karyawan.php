<?php

/**
 * This is the model class for table "karyawan".
 *
 * The followings are the available columns in table 'karyawan':
 * @property integer $id
 * @property string $nama
 * @property string $jenis_identitas
 * @property string $no_identitas
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $kota
 * @property string $no_telp
 * @property string $no_hp
 * @property string $tanggal_masuk
 * @property integer $status_karyawan
 * @property integer $devisiid
 * @property integer $departemenid
 * @property string $jabatan
 * @property integer $golonganid
 * @property string $nilai_terakhir
 * @property integer $total_nilai
 *
 * The followings are the available model relations:
 * @property Devisi $devisi
 * @property Golongan $golongan
 * @property Nilai2Karyawan[] $nilai2Karyawans
 * @property Nilai2KaryawanUp[] $nilai2KaryawanUps
 * @property Nilai2KaryawanUp[] $nilai2KaryawanUps1
 * @property NilaiKaryawan[] $nilaiKaryawans
 * @property NilaiKaryawanUp[] $nilaiKaryawanUps
 * @property NilaiKaryawanUp[] $nilaiKaryawanUps1
 * @property NilaiTotalKaryawan[] $nilaiTotalKaryawans
 */
class Karyawan extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Karyawan the static model class
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
		return 'karyawan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama, devisiid, departemenid,', 'required'),
			array('status_karyawan, devisiid, departemenid, golonganid, total_nilai', 'numerical', 'integerOnly'=>true),
			array('nama, no_identitas, tempat_lahir, kota, jabatan', 'length', 'max'=>100),
			array('jenis_identitas', 'length', 'max'=>20),
			array('alamat, nilai_terakhir', 'length', 'max'=>255),
			array('no_telp, no_hp', 'length', 'max'=>25),
			array('tanggal_lahir, tanggal_masuk', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nama, jenis_identitas, no_identitas, tempat_lahir, tanggal_lahir, alamat, kota, no_telp, no_hp, tanggal_masuk, status_karyawan, devisiid, departemenid, jabatan, golonganid, nilai_terakhir, total_nilai', 'safe', 'on'=>'search'),
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
			'devisi' => array(self::BELONGS_TO, 'Devisi', 'devisiid'),
			'golongan' => array(self::BELONGS_TO, 'Golongan', 'golonganid'),
			'nilai2Karyawans' => array(self::HAS_MANY, 'Nilai2Karyawan', 'karyawanid'),
			'nilai2KaryawanUps' => array(self::HAS_MANY, 'Nilai2KaryawanUp', 'karyawanid'),
			'nilai2KaryawanUps1' => array(self::HAS_MANY, 'Nilai2KaryawanUp', 'upid'),
			'nilaiKaryawans' => array(self::HAS_MANY, 'NilaiKaryawan', 'karyawanid'),
			'nilaiKaryawanUps' => array(self::HAS_MANY, 'NilaiKaryawanUp', 'karyawanid'),
			'nilaiKaryawanUps1' => array(self::HAS_MANY, 'NilaiKaryawanUp', 'upid'),
			'nilaiTotalKaryawans' => array(self::HAS_MANY, 'NilaiTotalKaryawan', 'karyawanid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nama' => 'Nama',
			'jenis_identitas' => 'Jenis Identitas',
			'no_identitas' => 'No Identitas',
			'tempat_lahir' => 'Tempat Lahir',
			'tanggal_lahir' => 'Tanggal Lahir',
			'alamat' => 'Alamat',
			'kota' => 'Kota',
			'no_telp' => 'No Telp',
			'no_hp' => 'No Hp',
			'tanggal_masuk' => 'Tanggal Masuk',
			'status_karyawan' => 'Status Karyawan',
			'devisiid' => 'Devisi',
			'departemenid' => 'Departement',
			'jabatan' => 'Jabatan',
			'golonganid' => 'Golongan',
			'nilai_terakhir' => 'Nilai Terakhir',
			'total_nilai' => 'Total Nilai',
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
		$criteria->compare('nama',$this->nama,true);
		$criteria->compare('jenis_identitas',$this->jenis_identitas,true);
		$criteria->compare('no_identitas',$this->no_identitas,true);
		$criteria->compare('tempat_lahir',$this->tempat_lahir,true);
		$criteria->compare('tanggal_lahir',$this->tanggal_lahir,true);
		$criteria->compare('alamat',$this->alamat,true);
		$criteria->compare('kota',$this->kota,true);
		$criteria->compare('no_telp',$this->no_telp,true);
		$criteria->compare('no_hp',$this->no_hp,true);
		$criteria->compare('tanggal_masuk',$this->tanggal_masuk,true);
		$criteria->compare('status_karyawan',$this->status_karyawan);
		$criteria->compare('devisiid',$this->devisiid);
		$criteria->compare('departemenid',$this->departemenid);
		$criteria->compare('jabatan',$this->jabatan,true);
		$criteria->compare('golonganid',$this->golonganid);
		$criteria->compare('nilai_terakhir',$this->nilai_terakhir,true);
		$criteria->compare('total_nilai',$this->total_nilai);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
	public function getStatusKaryawans(){
		return array(0=>Yii::t('app', 'Tetap'),1=>Yii::t('app', 'Kontrak'));
	}
}