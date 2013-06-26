




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

$index=0;
$jum1=0;
$jum2=0;
$jum3=0;
$jum4=0;
$jum5=0;

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

}

?>
<tr>
<td rowspan="2"><?php echo $i+1;?></td>
	<td><?php echo $n2s[$i]->cv;?></td>
	<td rowspan="2"><?php echo $n2s[$i]->bobot;?></td>
	<td rowspan="2"><?php echo $n1[$i];?></td>
	<td rowspan="2"><?php echo $n2[$i];?></td>
	<td rowspan="2"><?php echo $n3[$i];?></td>
	<td rowspan="2"><?php echo $n4[$i];?></td>
	<td rowspan="2"><?php echo $n5[$i];?></td>
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


