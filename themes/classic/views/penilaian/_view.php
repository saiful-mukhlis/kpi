
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
$index=0;
$index3=0;
$jum_bobot=0;
$sa=0;
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

$nk=NilaiKaryawan::model()->findByAttributes(array('nilai_tugasid'=>$w->id, 'karyawanid'=>$karyawanid));
if ($nk!=null) {
	echo '<td>'.$nk->realisasi.'</td>';
	echo '<td>'.$nk->skor.'</td>';
	echo '<td>'.$nk->skor_akhir.'</td>';
	$sa=$sa+$nk->skor_akhir;
}else{
	echo '<td></td>';
	echo '<td></td>';
	echo '<td></td>';
}
?>

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
	<td><?php echo $sa;?></td>
</tr>
</tbody>
</table>


