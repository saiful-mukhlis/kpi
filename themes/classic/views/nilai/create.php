<?php
$this->page['breadcrumbs']=array(
	'Nilais'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List Nilai','url'=>array('index')),
);
?>
<div class="container">
<h1>Create Nilai</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>