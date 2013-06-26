<?php
class PenilaianController extends Controller {
	public function actionKerja($id=0) {
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			//$this->redirect('site/login');
		}
		
		$model=new PenilaianKerjaForm();
		
		$this->render ( 'kerja', array('model'=>$model, 'devisiid'=>$devisiid, 'id'=>$id) );
	}
}