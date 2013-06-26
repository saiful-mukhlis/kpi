<?php
$this->page['breadcrumbs']=array(
	'Karyawans'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Create Karyawan','url'=>array('create')),
	array('label'=>'Update Karyawan','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Karyawan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View Karyawan #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
		'jenis_identitas',
		'no_identitas',
		'tempat_lahir',
		'tanggal_lahir',
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
	),
)); ?>
</div>