<?php
$this->page['breadcrumbs']=array(
	'Periodes'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List Periode','url'=>array('index')),
);
?>
<div class="container">
<h1>Create Periode</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>