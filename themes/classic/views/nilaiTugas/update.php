<?php
$this->page['breadcrumbs']=array(
	'Nilai Tugases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->page['actions']=array(
	array('label'=>'List NilaiTugas','url'=>array('index')),
	array('label'=>'Create NilaiTugas','url'=>array('create')),
	array('label'=>'View NilaiTugas','url'=>array('view','id'=>$model->id)),
);
?>
<div class="container">
<h1>Update NilaiTugas <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model, 'id'=>$id)); ?></div>