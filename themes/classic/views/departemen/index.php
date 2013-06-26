<?php
$this->page['breadcrumbs']=array(
	'Departemens'
);

$this->page['actions']=array(
	array('label'=>'Create Departemen','url'=>array('create')),
);
?>

<h1>Data Departemens</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'departemen-grid',
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
