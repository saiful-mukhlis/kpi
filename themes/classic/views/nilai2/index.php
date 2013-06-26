<?php
$this->page['breadcrumbs']=array(
	'Nilai2s'
);

$this->page['actions']=array(
	array('label'=>'Create Nilai2','url'=>array('create')),
);
?>

<h1>Data Nilai2s</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'nilai2-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'cv',
		'note',
		'bobot',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
