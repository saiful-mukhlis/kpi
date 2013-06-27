<?php
class PenilaianController extends Controller {
	
	public function actionViewCoreDownline2() {
		$privilege=Yii::app()->user->getState('privilege');
		if ($privilege!=2) {
			$this->redirect('site/error');
		}
		$periode=$this->buildPeriode();
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			$this->redirect('site/login');
		}
		$karyawans=Karyawan::model()->with('usr')->findAll(' t.devisiid = '.$devisiid.' AND usr.privilege > 2 ');
		$this->render ( 'viewCoreDownline2', array( 'devisiid'=>$devisiid,  'periode'=>$periode,  'karyawanid'=>$karyawanid, 'karyawans'=>$karyawans) );
	}
	
	public function actionViewCoreDownline3() {
		$privilege=Yii::app()->user->getState('privilege');
		if ($privilege!=3) {
			$this->redirect('site/error');
		}
		$periode=$this->buildPeriode();
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			$this->redirect('site/login');
		}
		$karyawans=Karyawan::model()->with('usr')->findAll(' t.devisiid = '.$devisiid.' AND usr.privilege > 3 ');
		$this->render ( 'viewCoreDownline2', array( 'devisiid'=>$devisiid,  'periode'=>$periode,  'karyawanid'=>$karyawanid, 'karyawans'=>$karyawans) );
	}	

	public function actionViewCore() {
		$periode=$this->buildPeriode();
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			$this->redirect('site/login');
		}
		$this->render ( 'viewCore', array( 'devisiid'=>$devisiid,  'periode'=>$periode,  'karyawanid'=>$karyawanid) );
	}
	public function actionCore($id=0) {
		$periode=$this->buildPeriode();
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			$this->redirect('site/login');
		}
		
		$model=new CoreForm();
		if(isset($_POST['CoreForm']))
		{
			$model->n1=$_POST['CoreForm']['n1'];
			$model->n2=$_POST['CoreForm']['n2'];
			$model->n3=$_POST['CoreForm']['n3'];
			$model->n4=$_POST['CoreForm']['n4'];
			$model->n5=$_POST['CoreForm']['n5'];
			$model->x1=$_POST['CoreForm']['x1'];
			if (is_array($model->n1)) {
				$count=count($model->n1);
				for ($i = 0; $i < $count; $i++) {
					$privilege=Yii::app()->user->getState('privilege');
				if ($id==0) {
					$n2k=Nilai2Karyawan::model()->findByAttributes(array('periodeid'=>$periode->periodeid, 'karyawanid'=>$karyawanid, 'nilai2id'=>$model->x1[$i]));
					if ($n2k==null) {
						$n2k=new Nilai2Karyawan();
						$n2k->periodeid=$periode->periodeid;
						$n2k->karyawanid=$karyawanid;
					}
					$n2k->nilai2id=$model->x1[$i];
					$n2k->n1=$model->n1[$i];
					$n2k->n2=$model->n2[$i];
					$n2k->n3=$model->n3[$i];
					$n2k->n4=$model->n4[$i];
					$n2k->n5=$model->n5[$i];
					$n2k->save();
				}else if ($privilege==2) {
					$n2k=Nilai2Karyawan2::model()->findByAttributes(array('periodeid'=>$periode->periodeid, 'upid'=>$karyawanid,'karyawanid'=>$id, 'nilai2id'=>$model->x1[$i]));
					if ($n2k==null) {
						$n2k=new Nilai2Karyawan2();
						$n2k->periodeid=$periode->periodeid;
						$n2k->karyawanid=$karyawanid;
					}
					$n2k->nilai2id=$model->x1[$i];
					$n2k->n1=$model->n1[$i];
					$n2k->n2=$model->n2[$i];
					$n2k->n3=$model->n3[$i];
					$n2k->n4=$model->n4[$i];
					$n2k->n5=$model->n5[$i];
					$n2k->save();
				}else if ($privilege==3) {
					$n2k=Nilai2Karyawan3::model()->findByAttributes(array('periodeid'=>$periode->periodeid, 'upid'=>$karyawanid,'karyawanid'=>$id, 'nilai2id'=>$model->x1[$i]));
					if ($n2k==null) {
						$n2k=new Nilai2Karyawan3();
						$n2k->periodeid=$periode->periodeid;
						$n2k->karyawanid=$karyawanid;
					}
					$n2k->nilai2id=$model->x1[$i];
					$n2k->n1=$model->n1[$i];
					$n2k->n2=$model->n2[$i];
					$n2k->n3=$model->n3[$i];
					$n2k->n4=$model->n4[$i];
					$n2k->n5=$model->n5[$i];
					$n2k->save();
				}
				}
			}
			$this->redirect('view-core');
		}
		$level=0;
		
		if ($id!=0) {
			$privilege=Yii::app()->user->getState('privilege');
			if ($privilege==2) {
				$level=2;
			}else if ($privilege==3) {
				$level=3;
			}
		}
		$this->render ( 'core', array('model'=>$model, 'devisiid'=>$devisiid, 'id'=>$id, 'periode'=>$periode, 'level'=>$level, 'karyawanid'=>$karyawanid) );
	}
	
	public function actionKerja($id=0) {
		
		$periode=$this->buildPeriode();	
		$level=0;	
		
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			$this->redirect('site/login');
		}
		
		$model=new PenilaianKerjaForm();
		if(isset($_POST['PenilaianKerjaForm']))
		{
			$model->realisasi=$_POST['PenilaianKerjaForm']['realisasi'];
			$model->nilai_tugasid=$_POST['PenilaianKerjaForm']['nilai_tugasid'];
			
			if (is_array($model->realisasi)) {
				$c=count($model->realisasi);
				
				// milik sendiri, downline 2, downline 3
				
				if ($id==0) {
					// milik sendiri
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
					}
					
					
					
				}else{
					// downline
					$privilege=Yii::app()->user->getState('privilege');
					if ($privilege==2) {
						for ($i = 0; $i < $c; $i++) {
							$nk=NilaiKaryawan2::model()->findByAttributes(array('upid'=>$karyawanid,'karyawanid'=>$id, 'nilai_tugasid'=>$model->nilai_tugasid[$i]));
							if ($nk==null) {
								$nk=new NilaiKaryawan2();
								$nk->upid=$karyawanid;
								$nk->karyawanid=$id;
							}
							$nk->nilai_tugasid=$model->nilai_tugasid[$i];
							$nk->realisasi=$model->realisasi[$i];
								
							$nt=NilaiTugas::model()->findByPk($nk->nilai_tugasid);
							if ($nt!=null) {
								$nk->skor=$nk->realisasi/100*$nt->target;
								$nk->skor_akhir=$nk->realisasi/100*$nt->bobot;
							}
							$nk->save();
						}
					}else if ($privilege==3) {
						for ($i = 0; $i < $c; $i++) {
							$nk=NilaiKaryawan3::model()->findByAttributes(array('upid'=>$karyawanid,'karyawanid'=>$id, 'nilai_tugasid'=>$model->nilai_tugasid[$i]));
							if ($nk==null) {
								$nk=new NilaiKaryawan3();
								$nk->upid=$karyawanid;
								$nk->karyawanid=$id;
							}
							$nk->nilai_tugasid=$model->nilai_tugasid[$i];
							$nk->realisasi=$model->realisasi[$i];
								
							$nt=NilaiTugas::model()->findByPk($nk->nilai_tugasid);
							if ($nt!=null) {
								$nk->skor=$nk->realisasi/100*$nt->target;
								$nk->skor_akhir=$nk->realisasi/100*$nt->bobot;
							}
							$nk->save();
						}
					}
				}
				

			}
			$this->redirect('view', array('id'=>$_POST['PenilaianKerjaForm']['periodeid']));
		}
		
		if ($id!=0) {
			$privilege=Yii::app()->user->getState('privilege');
			if ($privilege==2) {
				$level=2;
			}else if ($privilege==3) {
				$level=3;
			}
		}
		
		$this->render ( 'kerja', array('model'=>$model, 'devisiid'=>$devisiid, 'id'=>$id, 'periode'=>$periode, 'level'=>$level) );
	}
	
	
	public function actionViewDownline2() {
		$periode=$this->buildPeriode();
		
		$privilege=Yii::app()->user->getState('privilege');
		if ($privilege!=2) {
			$this->redirect('site/error');
		}
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			$this->redirect('site/login');
		}
		
		$karyawans=Karyawan::model()->with('usr')->findAll(' t.devisiid = '.$devisiid.' AND usr.privilege > 2 ');
		//echo count($karyawans);return ;
		$this->render ( 'viewDownline2', array('karyawans'=>$karyawans, 'periode'=>$periode) );
	}
	
	public function actionViewDownline3() {
		$periode=$this->buildPeriode();
	
		$privilege=Yii::app()->user->getState('privilege');
		if ($privilege!=3) {
			$this->redirect('site/error');
		}
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			$this->redirect('site/login');
		}
	
		$karyawans=Karyawan::model()->with('usr')->findAll(' t.devisiid = '.$devisiid.' AND usr.privilege > 3 ');
		//echo count($karyawans).$devisiid;return ;
		$this->render ( 'viewDownline2', array('karyawans'=>$karyawans, 'periode'=>$periode) );
	}
	
	public function actionKerjaDownline() {
	
		$periode=$this->buildPeriode();
	
		$devisiid=Yii::app()->user->getState('devisiid');
		$karyawanid=Yii::app()->user->getState('userid');
		if ($karyawanid==null || $devisiid==null || $karyawanid==='-' || $devisiid ==='-') {
			$this->redirect('site/login');
		}
	
		
		$karyawans=Karyawan::model()->with(array('usr'=>array('condition'=>'privilege>2')))->findAllByAttributes(array('devisiid'=>$devisiid));
		$karyawan_array=array();
		$karyawan_first=0;
		$i=0;
		foreach ($karyawans as $v) {
			$karyawan_array[$v->id]=$v->nama;
			if ($i==0) {
				$karyawan_first=$v->id;
			}
			$i++;
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
			$this->redirect('site/login');
		}
		
		//$nk=NilaiKaryawan::model()->with(array('nilaiTugas'=>array('with'=>array('nilai'=>array('condition'=>'periodeid='.$periode->periodeid)))))->findAllByAttributes(array('karyawanid'=>Yii::app()->user->getState('userid')));
		$this->render ( 'view', array('periode'=>$periode ));
	}	
	

	
	public function buildPeriode(){
		$periode=new PeriodeForm();
	
		if(isset($_POST['PeriodeForm']))
		{
			$periode->attributes=$_POST['PeriodeForm'];
		}
	
		if ($periode->periodeid===null) {
			$p=Periode::model()->find(array('order'=>'id DESC'));
			$periode->periodeid=$p->id;
		}
		return $periode;
	}
}