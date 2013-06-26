<?php

class PenilaianKerjaForm extends CFormModel
{
	public $realisasi;
	public $skor;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('realisasi, skor', 'required'),
				array('realisasi, skor', 'numerical', 'integerOnly'=>true),
		);
	}

}