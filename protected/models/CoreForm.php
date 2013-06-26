<?php
class CoreForm extends CFormModel {
	public $n1;
	public $n2;
	public $n3;
	public $n4;
	public $n5;
	public $x1;
	public $x2;
	public $x3;
	public $x4;
	public $x5;
	public function rules() {
		return array (
				array (
						'n1,n2,n3,n4,n5,x1',
						'required' 
				),
				array (
						'n1,n2,n3,n4,n5,x1,x2,x3,x4,x5',
						'numerical',
						'integerOnly' => true 
				) 
		);
	}
}