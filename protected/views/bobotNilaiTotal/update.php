<?php
$this->page['breadcrumbs']=array(
	'Bobot Nilai Totals'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->page['actions']=array(
	array('label'=>'List BobotNilaiTotal','url'=>array('index')),
	array('label'=>'Create BobotNilaiTotal','url'=>array('create')),
	array('label'=>'View BobotNilaiTotal','url'=>array('view','id'=>$model->id)),
);
?>
<div class="container">
<h1>Update BobotNilaiTotal <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?></div>