<?php
class PenilaianController extends Controller {
	public function actionKerja($id=0) {
		
		$periode=new PeriodeForm();
		
		if(isset($_POST['PeriodeForm']))
		{
			$periode->attributes=$_POST['PeriodeForm'];
		}
		
		if ($periode->periodeid===null) {
			$p=Periode::model()->find(array('order'=>'id DESC'));
			$periode->periodeid=$p->id;
		}		
		
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			//$this->redirect('site/login');
		}
		
		$model=new PenilaianKerjaForm();
		if(isset($_POST['PenilaianKerjaForm']))
		{
			$model->realisasi=$_POST['PenilaianKerjaForm']['realisasi'];
			$model->nilai_tugasid=$_POST['PenilaianKerjaForm']['nilai_tugasid'];
			
			if (is_array($model->realisasi)) {
				$c=count($model->realisasi);
				for ($i = 0; $i < $c; $i++) {
					$nk=NilaiKaryawan::model()->findByAttributes(array('karyawanid'=>Yii::app()->user->getState('userid'), 'nilai_tugasid'=>$model->nilai_tugasid[$i]));
					if ($nk==null) {
						$nk=new NilaiKaryawan();
						$nk->karyawanid=Yii::app()->user->getState('userid');
					}
					$nk->nilai_tugasid=$model->nilai_tugasid[$i];
					$nk->realisasi=$model->realisasi[$i];
					
					$nt=NilaiTugas::model()->findByPk($nk->nilai_tugasid);
					if ($nt!=null) {
						$nk->skor=$nk->realisasi/100*$nt->target;
						$nk->skor_akhir=$nk->realisasi/100*$nt->bobot;
					}
					$nk->save();
// 					if ($nk->save()) {
// 						//print_r($_POST['PenilaianKerjaForm']['realisasi']);
// 					}else{
// 						//print_r($_POST['PenilaianKerjaForm']['realisasi']);
// 						//echo 'xx'.$nk->getErrors().$nk->nilai_tugasid;
						
// 					}
					
				}
			}
			$this->redirect('view', array('id'=>$_POST['PenilaianKerjaForm']['periodeid']));
		}
		
		$this->render ( 'kerja', array('model'=>$model, 'devisiid'=>$devisiid, 'id'=>$id, 'periode'=>$periode) );
	}
	
	
	public function actionKerjaDownline() {
	
		$periode=new PeriodeForm();
	
		if(isset($_POST['PeriodeForm']))
		{
			$periode->attributes=$_POST['PeriodeForm'];
		}
	
		if ($periode->periodeid===null) {
			$p=Periode::model()->find(array('order'=>'id DESC'));
			$periode->periodeid=$p->id;
		}
	
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			//$this->redirect('site/login');
		}
	
		
		$karyawans=Karyawan::model()->with(array('usr'=>array('condition'=>'privilege>2')))->findAllByAttributes(array('devisiid'=>$devisiid));

		
		$model=new PenilaianKerjaForm();
		if(isset($_POST['PenilaianKerjaForm']))
		{
			$model->realisasi=$_POST['PenilaianKerjaForm']['realisasi'];
			$model->nilai_tugasid=$_POST['PenilaianKerjaForm']['nilai_tugasid'];
				
			if (is_array($model->realisasi)) {
				$c=count($model->realisasi);
				for ($i = 0; $i < $c; $i++) {
					$nk=NilaiKaryawan::model()->findByAttributes(array('karyawanid'=>Yii::app()->user->getState('userid'), 'nilai_tugasid'=>$model->nilai_tugasid[$i]));
					if ($nk==null) {
						$nk=new NilaiKaryawan();
						$nk->karyawanid=Yii::app()->user->getState('userid');
					}
					$nk->nilai_tugasid=$model->nilai_tugasid[$i];
					$nk->realisasi=$model->realisasi[$i];
						
					$nt=NilaiTugas::model()->findByPk($nk->nilai_tugasid);
					if ($nt!=null) {
						$nk->skor=$nk->realisasi/100*$nt->target;
						$nk->skor_akhir=$nk->realisasi/100*$nt->bobot;
					}
					$nk->save();
					// 					if ($nk->save()) {
					// 						//print_r($_POST['PenilaianKerjaForm']['realisasi']);
					// 					}else{
					// 						//print_r($_POST['PenilaianKerjaForm']['realisasi']);
					// 						//echo 'xx'.$nk->getErrors().$nk->nilai_tugasid;
	
					// 					}
						
				}
			}
			$this->redirect('view', array('id'=>$_POST['PenilaianKerjaForm']['periodeid']));
		}
	
		$this->render ( 'kerja', array('model'=>$model, 'devisiid'=>$devisiid, 'id'=>$id, 'periode'=>$periode) );
	}
	
	
	public function actionView($id=0) {
		$periode = new PeriodeForm ();
		if ($id == 0) {
			
			if (isset ( $_POST ['PeriodeForm'] )) {
				$periode->attributes = $_POST ['PeriodeForm'];
			}
			
			if ($periode->periodeid === null) {
				$p = Periode::model ()->find ( array (
						'order' => 'id DESC' 
				) );
				$periode->periodeid = $p->id;
			}
		} else {
			$periode->periodeid = $id;
		}
		
		
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			//$this->redirect('site/login');
		}
		
		//$nk=NilaiKaryawan::model()->with(array('nilaiTugas'=>array('with'=>array('nilai'=>array('condition'=>'periodeid='.$periode->periodeid)))))->findAllByAttributes(array('karyawanid'=>Yii::app()->user->getState('userid')));
		$this->render ( 'view', array('periode'=>$periode ));
	}	
	
}