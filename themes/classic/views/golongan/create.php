<?php
$this->page['breadcrumbs']=array(
	'Golongans'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List Golongan','url'=>array('index')),
);
?>
<div class="container">
<h1>Create Golongan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>