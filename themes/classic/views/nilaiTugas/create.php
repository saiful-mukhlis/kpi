<?php
$this->page['breadcrumbs']=array(
	'Nilai Tugases'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List NilaiTugas','url'=>array('index')),
);
?>
<div class="container">
<h1>Create NilaiTugas</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model, 'id'=>$id)); ?></div>