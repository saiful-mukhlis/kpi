<?php
$this->page['breadcrumbs']=array(
	'Nilai Tugases'
);

$this->page['actions']=array(
	array('label'=>'Create NilaiTugas','url'=>array('create')),
);
?>

<h1>Data Nilai Tugases</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'nilai-tugas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nilaiid',
		'tugas',
		'kpi',
		'bobot',
		'target',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
