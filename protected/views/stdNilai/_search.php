<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'smin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'smax',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kategori',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'huruf',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'kredit',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
