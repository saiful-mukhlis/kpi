<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'nilai-tugas-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php 
	if ($id==0) {
		// echo $form->textFieldRow($model,'nilaiid',array('class'=>'span5'));
		
		echo $form->select2Row($model2, 'nilaiid', array(
				'asDropDownList' => true,
				'class' => 'span5',
				'data' => CHtml::listData(Nilai::model()->findAll(array('order'=>'nama asc')),'id', 'nama'),
				'empty' => '',
				'options' => array(
						'placeholder' => Yii::t('app','Pilih KRA'),
						'allowClear' => true,
				)
		));
	}
	
	?>

	<?php echo $form->textAreaRow($model,'tugas',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'kpi',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'bobot',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'target',array('class'=>'span5')); ?>

	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>
