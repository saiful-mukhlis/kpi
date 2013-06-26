
<h1>Data Penilaian Downline</h1>

<?php echo $this->renderPartial('_periode_form',array('periode'=>$periode)); ?>


<?php 
$ns=Nilai::model()->findAllByAttributes(array('devisiid'=>Yii::app()->user->getState('devisiid'), 'periodeid'=>$periode->periodeid));
?>

<div class="accordion" id="accordion2">

<?php 
foreach ($karyawans as $model) {
?>


<div class="accordion-group">
  <div class="accordion-heading">
    <div class="accordion-toggle" data-toggle="collapse" data-parent="#accordion<?php echo $model->id;?>" href="#collapse<?php echo $model->id;?>">
      <?php echo $model->nama;?>
    </div>
  </div>
  
  <div id="collapse<?php echo $model->id;?>" class="accordion-body collapse">
    <div class="accordion-inner">
		<div style="float: right;">
  			<?php echo CHtml::link('Update Penilaian',array('kerja','id'=>$model->id), array('class'=>'btn btn-mini'));?>   
		</div>    
		<?php echo $this->renderPartial('_view',array('ns'=>$ns, 'karyawanid'=>$model->id)); ?>
    </div>
  </div>
</div>
<?php 
}
?>
</div>