<?php
$this->page['breadcrumbs']=array(
	'Nilais'
);

$this->page['actions']=array(
	array('label'=>'Create Nilai','url'=>array('create')),
);
?>

<style>
<!--
.accordion-group {
  margin-bottom: 2px;
  border: 1px solid #e5e5e5;
  -webkit-border-radius: 0px;
     -moz-border-radius: 0px;
          border-radius: 0px;
}
.accordion-heading {
background-color: #eee;
}
-->
</style>

<h1>Data KRA</h1>


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





<?php 

Yii::app()->clientScript->registerScript('periode', "
/*<![CDATA[*/
jQuery(function($) {
jQuery('#PeriodeForm_periodeid').on('change', function(e) {this.form.submit();});
});
/*]]>*/
",CClientScript::POS_END);

?>


<div class="accordion" id="accordion2">

<?php 
foreach ($models as $model) {
?>
<div class="accordion-group">
  <div class="accordion-heading">
    <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $model->id;?>" href="#collapse<?php echo $model->id;?>">
      <?php echo $model->kra;?>
    </div>
  </div>
  <div id="collapse<?php echo $model->id;?>" class="accordion-body collapse">
    <div class="accordion-inner">
<div style="float: right;">
  <?php echo CHtml::link('Add KPI',array('nilai-tugas/create','id'=>$model->id), array('class'=>'btn btn-mini'));?>   
  <?php echo CHtml::link('Add KRA',array('nilai/create'), array('class'=>'btn btn-mini'));?>  
  <?php echo CHtml::link('Edit KRA',array('nilai/update','id'=>$v->id), array('class'=>'btn btn-mini'))?>   
  <?php echo CHtml::link('Delete KRA','#',array('submit'=>array('nilai/delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?','class'=>'btn btn-mini'))?>
</div>    
<table class="table table-striped">
<thead>
	<tr>
		<th>#</th>
		<th>Tugas</th>
		<th>KPI</th>
		<th>Bobot</th>
		<th>Target</th>
		<th>Actions</th>
	</tr>
</thead>
<tbody> 
  
<?php 
$nts=NilaiTugas::model()->findAllByAttributes(array('nilaiid'=>$model->id));
$index=0;
foreach ($nts as $v) {
$index++;
?>
<tr>
	<td><?php echo $index;?></td>
	<td><?php echo $v->tugas;?></td>
	<td><?php echo $v->kpi;?></td>
	<td><?php echo $v->bobot;?></td>
	<td><?php echo $v->target;?></td>
	<td><?php echo CHtml::link('Edit',array('nilai-tugas/update','id'=>$v->id), array('class'=>'btn btn-mini'))?>   
	<?php echo CHtml::link('Delete','#',array('submit'=>array('nilai-tugas/delete','id'=>$v->id),'confirm'=>'Are you sure you want to delete this item?','class'=>'btn btn-mini'))?>
	</td>
</tr> 
<?php 
}
?>
</tbody>
</table>
    </div>
  </div>
</div>

<?php 
}
?>

</div>


<?php 

// $this->widget('bootstrap.widgets.TbGridView',array(
// 	'id'=>'nilai-grid',
// 	'dataProvider'=>$model->search(),
// 	'filter'=>$model,
// 	'columns'=>array(
// 		'id',
// 		'devisiid',
// 		'kra',
// 		array(
// 			'class'=>'bootstrap.widgets.TbButtonColumn',
// 		),
// 	),
// )); 

?>
