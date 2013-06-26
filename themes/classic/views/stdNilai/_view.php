<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smin')); ?>:</b>
	<?php echo CHtml::encode($data->smin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('smax')); ?>:</b>
	<?php echo CHtml::encode($data->smax); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori')); ?>:</b>
	<?php echo CHtml::encode($data->kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('huruf')); ?>:</b>
	<?php echo CHtml::encode($data->huruf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kredit')); ?>:</b>
	<?php echo CHtml::encode($data->kredit); ?>
	<br />


</div>