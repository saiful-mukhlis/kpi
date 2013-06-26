<?php
$this->page['breadcrumbs']=array(
	'Departemens'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List Departemen','url'=>array('index')),
	array('label'=>'Create Departemen','url'=>array('create')),
	array('label'=>'Update Departemen','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Departemen','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View Departemen #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
</div>