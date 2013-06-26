<?php
$this->page['breadcrumbs']=array(
	'Nilai Tugases'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List NilaiTugas','url'=>array('index')),
	array('label'=>'Create NilaiTugas','url'=>array('create')),
	array('label'=>'Update NilaiTugas','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete NilaiTugas','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View NilaiTugas #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nilaiid',
		'tugas',
		'kpi',
		'bobot',
		'target',
	),
)); ?>
</div>