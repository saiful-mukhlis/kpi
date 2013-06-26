<?php
$this->page['breadcrumbs']=array(
	'Usrs'=>array('index'),
	'Create',
);

$this->page['actions']=array(
	array('label'=>'List Usr','url'=>array('index')),
);
?>
<div class="container">
<h1>Create Usr</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?></div>