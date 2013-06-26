<?php
$this->page['breadcrumbs']=array(
	'Periodes'
);

$this->page['actions']=array(
	array('label'=>'Create Periode','url'=>array('create')),
);
?>

<h1>Data Periodes</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'periode-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		'status',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
