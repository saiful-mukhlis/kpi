<?php
$this->page['breadcrumbs']=array(
	'Std Nilais'
);

$this->page['actions']=array(
	array('label'=>'Create StdNilai','url'=>array('create')),
);
?>

<h1>Data Std Nilais</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'std-nilai-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'smin',
		'smax',
		'kategori',
		'huruf',
		'kredit',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
