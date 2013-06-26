<?php
$this->page['breadcrumbs']=array(
	'Devisis'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List Devisi','url'=>array('index')),
);
?>
<div class="container">
<h1>Create Devisi</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>