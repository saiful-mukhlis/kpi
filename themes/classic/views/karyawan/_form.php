<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'karyawan-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<?php echo $form->errorSummary($model2); ?>
	
	<?php echo $form->textFieldRow($model2,'email',array('class'=>'span5','maxlength'=>100)); ?>

	<?php // echo $form->textFieldRow($model2,'privilege',array('class'=>'span5')); ?>
	
	<?php

echo $form->select2Row($model2, 'privilege', array(
    'asDropDownList' => true,
    'class' => 'span5',
    'data' => $model2->getPrevillage(),
    'empty' => '',
    'options' => array(
        'placeholder' => Yii::t('app','Pilih Hak Akses'),
        'allowClear' => true,
    )
));
?>


	
	<?php echo $form->textFieldRow($model,'nama',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'jenis_identitas',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'no_identitas',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'tempat_lahir',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->datepickerRow($model,'tanggal_lahir',array('class'=>'span5')); ?>

	<?php echo $form->textAreaRow($model,'alamat',array('class'=>'span5','maxlength'=>255, 'rows'=>5)); ?>

	<?php echo $form->textFieldRow($model,'kota',array('class'=>'span5','maxlength'=>100)); ?>

	<?php echo $form->textFieldRow($model,'no_telp',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'no_hp',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->datepickerRow($model,'tanggal_masuk',array('class'=>'span5')); ?>

	<?php // echo $form->textFieldRow($model,'status_karyawan',array('class'=>'span5')); ?>
	<?php

echo $form->select2Row($model, 'status_karyawan', array(
    'asDropDownList' => true,
    'class' => 'span5',
    'data' => $model->getStatusKaryawans(),
    'empty' => '',
    'options' => array(
        'placeholder' => Yii::t('app','Pilih Status Karyawan'),
        'allowClear' => true,
    )
));
?>	

	<?php // echo $form->textFieldRow($model,'devisiid',array('class'=>'span5')); ?>
	<?php

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
?>		

	<?php // echo $form->textFieldRow($model,'departemenid',array('class'=>'span5')); ?>
	<?php

echo $form->select2Row($model, 'departemenid', array(
    'asDropDownList' => true,
    'class' => 'span5',
    'data' => CHtml::listData(Departemen::model()->findAll(array('order'=>'nama asc')),'id', 'nama'),
    'empty' => '',
    'options' => array(
        'placeholder' => Yii::t('app','Pilih Departement'),
        'allowClear' => true,
    )
));
?>		

	<?php echo $form->textFieldRow($model,'jabatan',array('class'=>'span5','maxlength'=>100)); ?>

	<?php // echo $form->textFieldRow($model,'golonganid',array('class'=>'span5')); ?>
	<?php

echo $form->select2Row($model, 'golonganid', array(
    'asDropDownList' => true,
    'class' => 'span5',
    'data' => CHtml::listData(Golongan::model()->findAll(array('order'=>'nama asc')),'id', 'nama'),
    'empty' => '',
    'options' => array(
        'placeholder' => Yii::t('app','Pilih Golongan'),
        'allowClear' => true,
    )
));
?>		

	<?php // echo $form->textFieldRow($model,'nilai_terakhir',array('class'=>'span5','maxlength'=>255)); ?>

	<?php // echo $form->textFieldRow($model,'total_nilai',array('class'=>'span5')); ?>

	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>
