<?php
$this->page['breadcrumbs']=array(
	'Devisis'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->page['actions']=array(
	array('label'=>'List Devisi','url'=>array('index')),
	array('label'=>'Create Devisi','url'=>array('create')),
	array('label'=>'View Devisi','url'=>array('view','id'=>$model->id)),
);
?>
<div class="container">
<h1>Update Devisi <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?></div>