<?php
$this->page['breadcrumbs']=array(
	'Departemens'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List Departemen','url'=>array('index')),
);
?>
<div class="container">
<h1>Create Departemen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>