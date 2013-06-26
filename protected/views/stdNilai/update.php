<?php
$this->page['breadcrumbs']=array(
	'Std Nilais'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->page['actions']=array(
	array('label'=>'List StdNilai','url'=>array('index')),
	array('label'=>'Create StdNilai','url'=>array('create')),
	array('label'=>'View StdNilai','url'=>array('view','id'=>$model->id)),
);
?>
<div class="container">
<h1>Update StdNilai <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?></div>