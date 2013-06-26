
<?php echo $this->renderPartial('_periode_form',array('periode'=>$periode)); ?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kerja-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php 
$script='';
?>

<input type="hidden"  name="PenilaianKerjaForm[periodeid]" id="PenilaianKerjaForm_periodeid" value="<?php echo $periode->periodeid;?>"/>

<table class="table">
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
<?php 
$ns=Nilai::model()->findAllByAttributes(array('devisiid'=>$devisiid, 'periodeid'=>$periode->periodeid));
$index=0;
$index3=0;
$jum_bobot=0;
$sa=0;
$realisasix=array();
$skorx=array();
$skor_akhirx=array();


foreach ($ns as $v) {
$index++;
$nts=NilaiTugas::model()->findAllByAttributes(array('nilaiid'=>$v->id));
$count=count($nts);
?>

<?php
$index2=0; 
foreach ($nts as $w) {
echo '<tr>';
$index2++;
if ($index2==1) {
	echo '<td rowspan="'.$count.'">'.$index.'</td>';
	echo '<td rowspan="'.$count.'">'.$v->kra.'</td>';
}
echo '<td>'.$w->kpi.'</td>';
echo '<td>'.$w->bobot.'</td>';
echo '<td>'.$w->target.'</td>';
$jum_bobot=$jum_bobot+$w->bobot;
$script.='var bobot'.$index3.'='.$w->bobot.';';
$script.='var target'.$index3.'='.$w->target.';';

$nk=array();
if ($level==0) {
$nk=NilaiKaryawan::model()->findByAttributes(array('nilai_tugasid'=>$w->id, 'karyawanid'=>Yii::app()->user->getState('userid')));	
}else if ($level==2) {
	$nk=NilaiKaryawan2::model()->findByAttributes(array('nilai_tugasid'=>$w->id, 'karyawanid'=>Yii::app()->user->getState('userid')));
}else if ($level==3) {
	$nk=NilaiKaryawan3::model()->findByAttributes(array('nilai_tugasid'=>$w->id, 'karyawanid'=>Yii::app()->user->getState('userid')));
}


$realisasi="";
$skor="";
$skor_akhir="";
$realisasix[$index3]=0;
$skorx[$index3]=0;
$skor_akhirx[$index3]=0;
if ($nk!=null) {
$realisasi=$nk->realisasi;
$skor=$nk->skor;
$skor_akhir=$nk->skor_akhir;
$realisasix[$index3]=$nk->realisasi;
$skorx[$index3]=$nk->skor;
$skor_akhirx[$index3]=$nk->skor_akhir;
$sa=$sa+$nk->skor_akhir;
}
?>
	<td><input class="span10"  value="<?php echo $realisasi;?>" name="PenilaianKerjaForm[realisasi][<?php echo $index3;?>]" id="PenilaianKerjaForm_realisasi_<?php echo $index3;?>" type="text">
		<input type="hidden" value="<?php echo $w->id;?>" name="PenilaianKerjaForm[nilai_tugasid][<?php echo $index3;?>]" id="PenilaianKerjaForm_nilai_tugasid_<?php echo $index3;?>">
	</td>
	<td id="s<?php echo $index3;?>"><?php echo $skor;?></td>
	<td id="sa<?php echo $index3;?>"><?php echo $skor_akhir;?></td>	
<?php $index3++;?>	

</tr>
<?php 

}
?>




<?php 

}
?>
<tr>
	<td colspan="3"></td>
	<td><?php echo $jum_bobot;?></td>
	<td colspan="3"></td>
	<td id="total"><?php echo $sa;?></td>
</tr>
</tbody>
</table>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>

<?php 

for ($ix = 0; $ix < $index3; $ix++) {
	$script.='
var t'.$ix.'='.$skorx[$ix].';
var b'.$ix.'='.$skor_akhirx[$ix].';		
$("#PenilaianKerjaForm_realisasi_'.$ix.'").change(function(e) {
		
	var tmp=0;
	tmp=parseInt($("#PenilaianKerjaForm_realisasi_'.$ix.'").val());
		console.log("rrx"+$("#PenilaianKerjaForm_realisasi_'.$ix.'").val());
	if (tmp>0){
		t'.$ix.'=tmp/100*target'.$ix.';	
		b'.$ix.'=tmp/100*bobot'.$ix.';	
	}else{
		t'.$ix.'=0;	
		b'.$ix.'=0;	
	}
		$("td#s'.$ix.'").html(t'.$ix.');
		$("td#sa'.$ix.'").html(b'.$ix.');
		$.total();	
		console.log("rr"+tmp);				
});	

		';
}

$script.='
		$.total=function(e) {
			var total=';
for ($iy = 0; $iy < $index3; $iy++) {
	if ($iy==0) {
		$script.='b'.$iy;
	}else{
		$script.='+b'.$iy;
	}
}
$script.=';
		console.log("xx"+total);
		$("td#total").html(total);
};';

Yii::app()->clientScript-> registerScript('penilaian' , $script , CClientScript::POS_END);
?>