<?php
$this->page['breadcrumbs']=array(
	'Devisis'
);

$this->page['actions']=array(
	array('label'=>'Create Devisi','url'=>array('create')),
);
?>

<h1>Data Devisis</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'devisi-grid',
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
