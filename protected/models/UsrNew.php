<?php

/**
 * This is the model class for table "usr".
 *
 * The followings are the available columns in table 'usr':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property integer $privilege
 * @property integer $userid
 * @property integer $status
 */
class UsrNew extends Usr
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usr the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('privilege, email', 'required'),
			array('privilege, userid, status', 'numerical', 'integerOnly'=>true),
			array('username, email', 'length', 'max'=>100),
			array('password', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, username, password, email, privilege, userid, status', 'safe', 'on'=>'search'),
		);
	}

	public function getPrevillage(){
		return array(1=>'Super User',2=>Yii::t('app', 'Head'),3=>Yii::t('app', 'D.Head'),4=>Yii::t('app', 'Officer'));
	}
}