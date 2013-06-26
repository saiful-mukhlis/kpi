<?php
$this->page['breadcrumbs']=array(
	'Nilai2s'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List Nilai2','url'=>array('index')),
	array('label'=>'Create Nilai2','url'=>array('create')),
	array('label'=>'Update Nilai2','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Nilai2','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View Nilai2 #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cv',
		'note',
		'bobot',
	),
)); ?>
</div>