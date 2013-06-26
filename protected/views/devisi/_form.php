<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'devisi-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>
