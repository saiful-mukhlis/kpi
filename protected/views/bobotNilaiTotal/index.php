<?php
$this->page['breadcrumbs']=array(
	'Bobot Nilai Totals'
);

$this->page['actions']=array(
	array('label'=>'Create BobotNilaiTotal','url'=>array('create')),
);
?>

<h1>Data Bobot Nilai Totals</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'bobot-nilai-total-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'periodeid',
		'b1',
		'b2',
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
