<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periodeid')); ?>:</b>
	<?php echo CHtml::encode($data->periodeid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b1')); ?>:</b>
	<?php echo CHtml::encode($data->b1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('b2')); ?>:</b>
	<?php echo CHtml::encode($data->b2); ?>
	<br />


</div>