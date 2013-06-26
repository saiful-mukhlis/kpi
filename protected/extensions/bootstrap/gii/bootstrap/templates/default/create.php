<?php
/**
 * The following variables are available in this template:
 * - $this: the BootCrudCode object
 */
?>
<?php
echo "<?php\n";
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->page['breadcrumbs']=array(
	'$label'=>array('index'),
	'Create',
);\n";
?>

$this->page['actions']=array(
	array('label'=>'List <?php echo $this->modelClass; ?>','url'=>array('index')),
);
?>
<div class="container">
<h1>Create <?php echo $this->modelClass; ?></h1>

<?php echo "<?php echo \$this->renderPartial('_form', array('model'=>\$model)); ?>"; ?>
</div>