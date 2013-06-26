
<?php echo $this->renderPartial('_periode_form',array('periode'=>$periode)); ?>


<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'core-form',
	'enableAjaxValidation'=>false,
)); ?>
<?php 
$script='';
?>

<input type="hidden"  name="PenilaianKerjaForm[periodeid]" id="PenilaianKerjaForm_periodeid" value="<?php echo $periode->periodeid;?>"/>

<table class="table">
<thead>
	<tr>
		<th rowspan="2">#</th>
		<th rowspan="2" width="40%">Core Values</th>
		<th rowspan="2">Bobot</th>
		<th colspan="5">Nilai</th>
	</tr>
	<tr>
		<th>1</th>
		<th>2</th>
		<th>3</th>
		<th>4</th>
		<th>5</th>
	</tr>
</thead>
<tbody> 
<?php 
$n2s=Nilai2::model()->findAll();
$index=0;
$jum1=0;
$jum2=0;
$jum3=0;
$jum4=0;
$jum5=0;
$n1=array();
$n2=array();
$n3=array();
$n4=array();
$n5=array();
$script.='var n1x= new Array();';
$script.='var n2x= new Array();';
$script.='var n3x= new Array();';
$script.='var n4x= new Array();';
$script.='var n5x= new Array();';
$count=count($n2s);
for ($i = 0; $i < $count; $i++) {
$n2k=null;
if ($level==0) {
	$n2k=Nilai2Karyawan::model()->findByAttributes(array('periodeid'=>$periode->periodeid, 'karyawanid'=>$karyawanid, 'nilai2id'=>$n2s[$i]->id));
}else if ($level==2) {
	$n2k=Nilai2Karyawan2::model()->findByAttributes(array('periodeid'=>$periode->periodeid, 'upid'=>$karyawanid,'karyawanid'=>$id, 'nilai2id'=>$n2s[$i]->id));
}else if ($level==3) {
	$n2k=Nilai2Karyawan3::model()->findByAttributes(array('periodeid'=>$periode->periodeid, 'upid'=>$karyawanid,'karyawanid'=>$id, 'nilai2id'=>$n2s[$i]->id));
}
$n1[$i]="";
$n2[$i]="";
$n3[$i]="";
$n4[$i]="";
$n5[$i]="";
if ($n2k!=null) {
	$n1[$i]=$n2k->n1;
	$n2[$i]=$n2k->n2;
	$n3[$i]=$n2k->n3;
	$n4[$i]=$n2k->n4;
	$n5[$i]=$n2k->n5;
	$jum1=$jum1+$n2k->n1;
	$jum2=$jum2+$n2k->n2;
	$jum3=$jum3+$n2k->n3;
	$jum4=$jum4+$n2k->n4;
	$jum5=$jum5+$n2k->n5;
	$script.='n1x['.$i.']='.$n2k->n1.';';
	$script.='n2x['.$i.']='.$n2k->n2.';';
	$script.='n3x['.$i.']='.$n2k->n3.';';
	$script.='n4x['.$i.']='.$n2k->n4.';';
	$script.='n5x['.$i.']='.$n2k->n5.';';
}else{
	$script.='n1x['.$i.']=0;';
	$script.='n2x['.$i.']=0;';
	$script.='n3x['.$i.']=0;';
	$script.='n4x['.$i.']=0;';
	$script.='n5x['.$i.']=0;';
}

?>
<tr>
<td rowspan="2"><?php echo $i+1;?></td>
	<td><?php echo $n2s[$i]->cv;?></td>
	<td rowspan="2"><?php echo $n2s[$i]->bobot;?></td>
	<td rowspan="2"><input class="span12"  value="<?php echo $n1[$i];?>" name="CoreForm[n1][<?php echo $i;?>]" id="CoreForm_n1_<?php echo $i;?>" type="text">
	<input type="hidden"  name="CoreForm[x1][<?php echo $i;?>]" value="<?php echo $n2s[$i]->id;?>" />
	</td>
	<td rowspan="2"><input class="span12"  value="<?php echo $n2[$i];?>" name="CoreForm[n2][<?php echo $i;?>]" id="CoreForm_n2_<?php echo $i;?>" type="text"></td>
	<td rowspan="2"><input class="span12"  value="<?php echo $n3[$i];?>" name="CoreForm[n3][<?php echo $i;?>]" id="CoreForm_n3_<?php echo $i;?>" type="text"></td>
	<td rowspan="2"><input class="span12"  value="<?php echo $n4[$i];?>" name="CoreForm[n4][<?php echo $i;?>]" id="CoreForm_n4_<?php echo $i;?>" type="text"></td>
	<td rowspan="2"><input class="span12"  value="<?php echo $n5[$i];?>" name="CoreForm[n5][<?php echo $i;?>]" id="CoreForm_n5_<?php echo $i;?>" type="text"></td>
</tr>
<tr>
	<td><?php echo $n2s[$i]->note;?></td>
</tr>
<?php
}

?>
<tr>
	<td colspan="3"></td>
	<td id="total1"><?php echo $jum1;?></td>
	<td id="total2"><?php echo $jum2;?></td>
	<td id="total3"><?php echo $jum3;?></td>
	<td id="total4"><?php echo $jum4;?></td>
	<td id="total5"><?php echo $jum5;?></td>
</tr>

</tbody>
</table>
	<div class="form-actions">
		<button type="submit" class="btn btn-primary">Save</button>
	</div>

<?php $this->endWidget(); ?>

<?php 

for ($ix = 0; $ix < $count; $ix++) {
	$script.='
var n1'.$ix.'='.$jum1.';
var n2'.$ix.'='.$jum2.';
var n3'.$ix.'='.$jum3.';
var n4'.$ix.'='.$jum4.';
var n5'.$ix.'='.$jum5.';								
$("#CoreForm_n1_'.$ix.'").change(function(e) {
		
	var tmp=0;
	tmp=parseInt($("#CoreForm_n1_'.$ix.'").val());
	if (tmp>0){
		n1x['.$ix.']=tmp;
	}else{
		n1x['.$ix.']=0;
	}
	var total=0;
	n1x.forEach(function(entry) {
    	total=total+entry;
	});
		$("td#total1").html(total);
			
});	
$("#CoreForm_n2_'.$ix.'").change(function(e) {
		
	var tmp=0;
	tmp=parseInt($("#CoreForm_n2_'.$ix.'").val());
	if (tmp>0){
		n2x['.$ix.']=tmp;
	}else{
		n2x['.$ix.']=0;
	}
	var total=0;
	n2x.forEach(function(entry) {
    	total=total+entry;
	});
		$("td#total2").html(total);
			
});	
$("#CoreForm_n3_'.$ix.'").change(function(e) {
		
	var tmp=0;
	tmp=parseInt($("#CoreForm_n3_'.$ix.'").val());
	if (tmp>0){
		n3x['.$ix.']=tmp;
	}else{
		n3x['.$ix.']=0;
	}
	var total=0;
	n3x.forEach(function(entry) {
    	total=total+entry;
	});
		$("td#total3").html(total);
			
});	
$("#CoreForm_n4_'.$ix.'").change(function(e) {
		
	var tmp=0;
	tmp=parseInt($("#CoreForm_n4_'.$ix.'").val());
	if (tmp>0){
		n4x['.$ix.']=tmp;
	}else{
		n4x['.$ix.']=0;
	}
	var total=0;
	n4x.forEach(function(entry) {
    	total=total+entry;
	});
		$("td#total4").html(total);
			
});	
$("#CoreForm_n5_'.$ix.'").change(function(e) {
		
	var tmp=0;
	tmp=parseInt($("#CoreForm_n5_'.$ix.'").val());
	if (tmp>0){
		n5x['.$ix.']=tmp;
	}else{
		n5x['.$ix.']=0;
	}
	var total=0;
	n5x.forEach(function(entry) {
    	total=total+entry;
	});

		$("td#total5").html(total);
			
});									

		';
}



Yii::app()->clientScript-> registerScript('penilaian_core' , $script , CClientScript::POS_END);
?>