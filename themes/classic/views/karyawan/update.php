<?php
$this->page['breadcrumbs']=array(
	'Karyawans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->page['actions']=array(
	array('label'=>'List Karyawan','url'=>array('index')),
	array('label'=>'Create Karyawan','url'=>array('create')),
	array('label'=>'View Karyawan','url'=>array('view','id'=>$model->id)),
);
?>
<div class="container">
<h1>Update Karyawan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model,'model2'=>$model2,)); ?></div>