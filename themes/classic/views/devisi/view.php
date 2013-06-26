<?php
$this->page['breadcrumbs']=array(
	'Devisis'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List Devisi','url'=>array('index')),
	array('label'=>'Create Devisi','url'=>array('create')),
	array('label'=>'Update Devisi','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Devisi','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View Devisi #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
</div>