<?php
$this->page['breadcrumbs']=array(
	'Periodes'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List Periode','url'=>array('index')),
	array('label'=>'Create Periode','url'=>array('create')),
	array('label'=>'Update Periode','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Periode','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View Periode #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
</div>