<?php
$this->page['breadcrumbs']=array(
	'Usrs'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List Usr','url'=>array('index')),
	array('label'=>'Create Usr','url'=>array('create')),
	array('label'=>'Update Usr','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete Usr','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View Usr #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'email',
		'privilege',
		'userid',
		'status',
	),
)); ?>
</div>