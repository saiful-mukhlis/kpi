<?php
$this->page['breadcrumbs']=array(
	'Nilai2s'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->page['actions']=array(
	array('label'=>'List Nilai2','url'=>array('index')),
	array('label'=>'Create Nilai2','url'=>array('create')),
	array('label'=>'View Nilai2','url'=>array('view','id'=>$model->id)),
);
?>
<div class="container">
<h1>Update Nilai2 <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?></div>