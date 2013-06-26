<h1>Penilaian Kerja</h1>
<?php echo $this->renderPartial('_periode_form',array('periode'=>$periode)); ?>
<?php 
$n2s=Nilai2::model()->findAll();
echo $this->renderPartial('_view_core',array('periode'=>$periode, 'devisiid'=>$devisiid, 'karyawanid'=>$karyawanid, 'level'=>0, 'n2s'=>$n2s)); 
?>