<?php
$this->page['breadcrumbs']=array(
	'Karyawans'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List Karyawan','url'=>array('index')),
);
?>
<div class="container">
<h1>Create Karyawan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>