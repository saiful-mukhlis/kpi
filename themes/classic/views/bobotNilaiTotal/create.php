<?php
$this->page['breadcrumbs']=array(
	'Bobot Nilai Totals'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List BobotNilaiTotal','url'=>array('index')),
);
?>
<div class="container">
<h1>Create BobotNilaiTotal</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>