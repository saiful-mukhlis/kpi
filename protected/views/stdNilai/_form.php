<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'std-nilai-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'smin',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'smax',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kategori',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'huruf',array('class'=>'span5','maxlength'=>1)); ?>

	<?php echo $form->textFieldRow($model,'kredit',array('class'=>'span5')); ?>

	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>
