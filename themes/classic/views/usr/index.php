<?php
$this->page['breadcrumbs']=array(
	'Usrs'
);

$this->page['actions']=array(
	array('label'=>'Create Usr','url'=>array('create')),
);
?>

<h1>Data Usrs</h1>


<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'usr-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'username',
		'password',
		'email',
		'privilege',
		'userid',
		/*
		'status',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
