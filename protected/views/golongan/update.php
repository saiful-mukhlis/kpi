<?php
$this->page['breadcrumbs']=array(
	'Golongans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->page['actions']=array(
	array('label'=>'List Golongan','url'=>array('index')),
	array('label'=>'Create Golongan','url'=>array('create')),
	array('label'=>'View Golongan','url'=>array('view','id'=>$model->id)),
);
?>
<div class="container">
<h1>Update Golongan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?></div>