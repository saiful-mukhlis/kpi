<?php

/**
 * This is the model class for table "std_nilai".
 *
 * The followings are the available columns in table 'std_nilai':
 * @property integer $id
 * @property integer $smin
 * @property integer $smax
 * @property string $kategori
 * @property string $huruf
 * @property integer $kredit
 */
class StdNilai extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return StdNilai the static model class
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
		return 'std_nilai';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('smin, smax', 'required'),
			array('smin, smax, kredit', 'numerical', 'integerOnly'=>true),
			array('kategori', 'length', 'max'=>100),
			array('huruf', 'length', 'max'=>1),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, smin, smax, kategori, huruf, kredit', 'safe', 'on'=>'search'),
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
			'smin' => 'Skor Min',
			'smax' => 'Skor Max',
			'kategori' => 'Kategori',
			'huruf' => 'Huruf',
			'kredit' => 'Kredit',
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
		$criteria->compare('smin',$this->smin);
		$criteria->compare('smax',$this->smax);
		$criteria->compare('kategori',$this->kategori,true);
		$criteria->compare('huruf',$this->huruf,true);
		$criteria->compare('kredit',$this->kredit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}