<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('devisiid')); ?>:</b>
	<?php echo CHtml::encode($data->devisiid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kra')); ?>:</b>
	<?php echo CHtml::encode($data->kra); ?>
	<br />


</div>