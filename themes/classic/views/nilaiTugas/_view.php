<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nilaiid')); ?>:</b>
	<?php echo CHtml::encode($data->nilaiid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tugas')); ?>:</b>
	<?php echo CHtml::encode($data->tugas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kpi')); ?>:</b>
	<?php echo CHtml::encode($data->kpi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bobot')); ?>:</b>
	<?php echo CHtml::encode($data->bobot); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target')); ?>:</b>
	<?php echo CHtml::encode($data->target); ?>
	<br />


</div>