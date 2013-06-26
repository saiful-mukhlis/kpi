<!doctype html>
<?php
echo H::ie();
echo CHtml::openTag('head');
$this->renderDynamic('H::meta',$this->title, $this->description, $this->keywords);
echo H::ico();
echo CHtml::closeTag('head');
echo CHtml::openTag('body');
echo $this->renderPartial('/global/upgrade_browser');
echo $content;
echo H::footer();
echo $this->renderPartial('/global/backtop');
echo $this->renderPartial('/global/ga');
echo CHtml::closeTag('body');
?>
</html>
