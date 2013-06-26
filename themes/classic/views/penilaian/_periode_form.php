<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'periode-select-form',
	'enableAjaxValidation'=>false,
)); ?>

<div class="row-fluid">
<div class="span5" style="float:right;">
<?php
echo $form->select2Row($periode, 'periodeid', array(
		'asDropDownList' => true,
		'class' => 'span12',
		'data' => CHtml::listData(Periode::model()->findAll(array('order'=>'nama asc')),'id', 'nama'),
		'empty' => '',
		'options' => array(
				'placeholder' => Yii::t('app','Pilih Periode'),
				'allowClear' => true,
		)
));
?>
</div>	
</div>

<?php $this->endWidget(); ?>