<?php
$this->page['breadcrumbs']=array(
	'Karyawans'
);

$this->page['actions']=array(
	array('label'=>'Create Karyawan','url'=>array('create')),
);
?>

<h1>Data Karyawans</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'karyawan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'jenis_identitas',
		'no_identitas',
		'tempat_lahir',
		'tanggal_lahir',
		/*
		'alamat',
		'kota',
		'no_telp',
		'no_hp',
		'tanggal_masuk',
		'status_karyawan',
		'devisiid',
		'departemenid',
		'jabatan',
		'golonganid',
		'nilai_terakhir',
		'total_nilai',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
