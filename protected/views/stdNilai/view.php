<?php
$this->page['breadcrumbs']=array(
	'Std Nilais'=>array('index'),
	$model->id,
);

$this->page['actions']=array(
	array('label'=>'List StdNilai','url'=>array('index')),
	array('label'=>'Create StdNilai','url'=>array('create')),
	array('label'=>'Update StdNilai','url'=>array('update','id'=>$model->id)),
	array('label'=>'Delete StdNilai','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>
<div class="container">
<h1>View StdNilai #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'smin',
		'smax',
		'kategori',
		'huruf',
		'kredit',
	),
)); ?>
</div>