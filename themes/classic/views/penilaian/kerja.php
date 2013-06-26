<?php
$this->page['breadcrumbs']=array(
	'Nilai Kerja'
);

?>
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kerja-form',
	'enableAjaxValidation'=>false,
)); ?>

<h1>Penilaian Kerja</h1>

<table class="table table-striped">
<thead>
	<tr>
		<th>#</th>
		<th>Sasaran Kunci</th>
		<th>KPI</th>
		<th>Bobot</th>
		<th>Target[%]</th>
		<th>Realisasi[%]</th>
		<th>Skor</th>
		<th>Skor Akhir</th>
	</tr>
</thead>
<tbody> 

</tbody>
</table>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>