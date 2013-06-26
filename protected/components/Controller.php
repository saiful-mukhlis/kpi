<?php
class Controller extends CController {
	public $layout = '//layouts/main';
	public $page=array();
	public function __construct($id,$module=null)
	{
		parent::__construct($id,$module);
		$this->setCss();
		$this->page['title']='KPI';
		//$this->generateMenu();
	}
	public function setCss(){
		$cs=Yii::app()->getClientScript();
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap.css');
		$cs->registerMetaTag('width=device-width, initial-scale=1.0', 'viewport');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap-responsive.css');
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/bootstrap/css/bootstrap-yii.css');
		
		$cs->registerCssFile(Yii::app()->baseUrl.'/css/style.css');
		
		$cs->registerCoreScript('jquery');
		$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/bootstrap.bootbox.min.js', CClientScript::POS_END);
		$cs->registerScriptFile(Yii::app()->baseUrl . '/css/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);
	}
// 	private function generateMenu(){
// // 		-- 0 Menu
// // 		-- 1 parent
// // 		-- 2 category
// // 		-- 3 page
		
// 		$value = Yii::app()->cache->get(1);
// 		if ($value === false) {
			
// 			$m=array();
// 			$m2=array();
// 			$c=Category::model()->findByPk(1);
// 			$c2=Category::model()->findAllByAttributes(array('parent'=>$c->id));
// 			$m2[$c->id]=$c2;
// 			foreach ($c2 as $v) {
// 				$c3=Category::model()->findAllByAttributes(array('parent'=>$v->id), array('order' =>'sort'));
// 				$m2[$v->id]=$c3;
// 				foreach ($c3 as $v3) {
// 					$c3=Category::model()->findAllByAttributes(array('parent'=>$v3->id), array('order' =>'sort'));
// 					$m2[$v3->id]=$c3;
// 				}
// 			}
// 			$m[0]=$c;
// 			$m[1]=$m2;
			
// 			Yii::app()->cache->set(1, $m, 1000);
// 			$this->page->m=$m;
// 		}else{
// 			$this->page->m=$value;
// 		}
		
// 	}
	public function getIdUser(){
		$id=Yii::app()->user->getState('id');
		if ($id==null) {
			$this->redirect(array('site/logout'));
		}
		return $id;
	}
	public function setPrevillage($status=1){
		$id=Yii::app()->user->getState('status');
		if ($id!=$status) {
			$this->redirect(array('site/index'));
		}
	}
}