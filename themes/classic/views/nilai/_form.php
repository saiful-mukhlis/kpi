<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'nilai-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php // echo $form->textFieldRow($model,'devisiid',array('class'=>'span5')); ?>
	<?php
$d=Yii::app()->user->getState('devisiid');	
if ($d==null || $d==='-') {
echo $form->select2Row($model, 'devisiid', array(
		'asDropDownList' => true,
		'class' => 'span5',
		'data' => CHtml::listData(Devisi::model()->findAll(array('order'=>'nama asc')),'id', 'nama'),
		'empty' => '',
		'options' => array(
				'placeholder' => Yii::t('app','Pilih Devisi'),
				'allowClear' => true,
		)
));
}

?>		

	<?php echo $form->textFieldRow($model,'kra',array('class'=>'span5','maxlength'=>100)); ?>

	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>
