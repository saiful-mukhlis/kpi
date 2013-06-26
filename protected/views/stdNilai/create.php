<?php
$this->page['breadcrumbs']=array(
	'Std Nilais'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List StdNilai','url'=>array('index')),
);
?>
<div class="container">
<h1>Create StdNilai</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>