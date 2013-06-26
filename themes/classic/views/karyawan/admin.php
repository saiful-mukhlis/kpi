<?php
$this->breadcrumbs=array(
	'Karyawans'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Create Karyawan','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('karyawan-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Karyawans</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

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
