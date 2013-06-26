<?php
$this->page['breadcrumbs']=array(
	'Golongans'
);

$this->page['actions']=array(
	array('label'=>'Create Golongan','url'=>array('create')),
);
?>

<h1>Data Golongans</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'golongan-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nama',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
