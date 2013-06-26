<?php
$this->page['breadcrumbs']=array(
	'Nilai2s'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List Nilai2','url'=>array('index')),
);
?>
<div class="container">
<h1>Create Nilai2</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>