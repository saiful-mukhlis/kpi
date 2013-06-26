<?php
class PeriodeForm extends CFormModel {
	public $periodeid;
	public function rules() {
		return array (
				array (
						'periodeid',
						'required' 
				),
				array (
						'periodeid',
						'numerical',
						'integerOnly' => true 
				) 
		);
	}
}