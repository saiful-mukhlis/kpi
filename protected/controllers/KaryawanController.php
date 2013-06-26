<?php

class KaryawanController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Karyawan;
		$model2=new UsrNew;

		$this->performAjaxValidation2($model,$model2);

		if(isset($_POST['Karyawan']))
		{
			$model->attributes=$_POST['Karyawan'];
			$model2->attributes=$_POST['UsrNew'];
			$transaction=Yii::app ()->db-> beginTransaction();
			try{
				if ($model->validate()) {
					$model->tanggal_lahir=date( 'Y-m-d', strtotime($model->tanggal_lahir));
					$model->tanggal_masuk=date( 'Y-m-d', strtotime($model->tanggal_masuk));
					if ($model->save()) {
					$model2->username=$model2->email;
					$model2->userid=$model->id;
					$model2->password=md5('1234');
					$model2->status=1;
					if ($model2->save()) {
						$transaction->commit();
						$this->redirect(array('view','id'=>$model->id));
					}
				}
				}

				
			}catch(Exception $e){
				$transaction->rollBack();
			}
				
		}

		$this->render('create',array(
			'model'=>$model, 'model2'=>$model2,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);
		$model2=UsrNew::model()->findByAttributes(array('userid'=>$model->id));
		
		$this->performAjaxValidation2($model,$model2);
		
		$model->tanggal_lahir=date( 'd-m-Y', strtotime($model->tanggal_lahir));
		$model->tanggal_masuk=date( 'd-m-Y', strtotime($model->tanggal_masuk));

		if(isset($_POST['Karyawan']))
		{
			$model->attributes=$_POST['Karyawan'];
			$model2->attributes=$_POST['UsrNew'];
			$transaction=Yii::app ()->db-> beginTransaction();
			try{
				if ($model->validate()) {
					$model->tanggal_lahir=date( 'Y-m-d', strtotime($model->tanggal_lahir));
					$model->tanggal_masuk=date( 'Y-m-d', strtotime($model->tanggal_masuk));
					if ($model->save()) {
					$model2->username=$model2->email;
					$model2->userid=$model->id;
					$model2->password=md5('1234');
					$model2->status=1;
					if ($model2->save()) {
						$transaction->commit();
						$this->redirect(array('view','id'=>$model->id));
					}
				}
				}

				
			}catch(Exception $e){
				$transaction->rollBack();
			}
				
		}

		$this->render('update',array(
			'model'=>$model,'model2'=>$model2,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$model=new Karyawan('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Karyawan']))
			$model->attributes=$_GET['Karyawan'];

		$this->render('index',array(
			'model'=>$model,
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Karyawan::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='karyawan-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	protected function performAjaxValidation2($model,$model2)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='karyawan-form')
		{
			$tmp=CActiveForm::validate($model);
			$tmp2=CActiveForm::validate($model2);

			$a1 = json_decode( $tmp, true );
			$a2 = json_decode( $tmp2, true );
			
			$res = array_merge_recursive( $a1, $a2 );
			
			$resJson = json_encode( $res );
			echo $resJson;
			Yii::app()->end();
		}
	}
}
