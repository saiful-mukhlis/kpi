<?php
$this->page['breadcrumbs']=array(
	'Usrs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->page['actions']=array(
	array('label'=>'List Usr','url'=>array('index')),
	array('label'=>'Create Usr','url'=>array('create')),
	array('label'=>'View Usr','url'=>array('view','id'=>$model->id)),
);
?>
<div class="container">
<h1>Update Usr <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?></div>