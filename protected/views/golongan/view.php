<?php
$this->page['breadcrumbs']=array(
	'Golongans'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List Golongan','url'=>array('index')),
	array('label'=>'Create Golongan','url'=>array('create')),
	array('label'=>'Update Golongan','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Golongan','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View Golongan #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
</div>