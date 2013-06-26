<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'nilai-tugas-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'nilaiid',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'tugas',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'kpi',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'bobot',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'target',array('class'=>'span5')); ?>

	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>
