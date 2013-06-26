<?php

class PenilaianKerjaForm extends CFormModel
{
	public $realisasi;
	public $nilai_tugasid;
	public $periodeid;

	/**
	 * Declares the validation rules.
	 */
	public function rules()
	{
		return array(
			array('realisasi, nilai_tugasid', 'required'),
				array('realisasi, nilai_tugasid', 'numerical', 'integerOnly'=>true),
		);
	}

}