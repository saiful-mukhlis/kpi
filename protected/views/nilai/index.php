<?php
$this->page['breadcrumbs']=array(
	'Nilais'
);

$this->page['actions']=array(
	array('label'=>'Create Nilai','url'=>array('create')),
);
?>

<h1>Data Nilais</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'nilai-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'devisiid',
		'kra',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
