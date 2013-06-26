
<h1>Data Penilaian Kerja</h1>


<?php echo $this->renderPartial('_periode_form',array('periode'=>$periode)); ?>

<?php 
$ns=Nilai::model()->findAllByAttributes(array('devisiid'=>Yii::app()->user->getState('devisiid'), 'periodeid'=>$periode->periodeid));
?>

<?php echo $this->renderPartial('_view',array('ns'=>$ns, 'karyawanid'=>Yii::app()->user->getState('userid'))); ?>


