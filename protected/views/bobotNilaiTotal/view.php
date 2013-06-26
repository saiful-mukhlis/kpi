<?php
$this->page['breadcrumbs']=array(
	'Bobot Nilai Totals'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List BobotNilaiTotal','url'=>array('index')),
	array('label'=>'Create BobotNilaiTotal','url'=>array('create')),
	array('label'=>'Update BobotNilaiTotal','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete BobotNilaiTotal','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View BobotNilaiTotal #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'periodeid',
		'b1',
		'b2',
	),
)); ?>
</div>