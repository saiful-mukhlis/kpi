<?php /* Smarty version Smarty-3.1.13, created on 2013-06-25 05:52:12
         compiled from "H:\xampp\htdocs\web12\themes\classic\views\departemen\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:593751c91362b2d7e6-28289556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24e4d68ef8ba252758d349089b6cb7247cd4efe9' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web12\\themes\\classic\\views\\departemen\\admin.tpl',
      1 => 1372132329,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '593751c91362b2d7e6-28289556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c91362b9b976_83685681',
  'variables' => 
  array (
    'model' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c91362b9b976_83685681')) {function content_51c91362b9b976_83685681($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'H:\\xampp\\htdocs\\web12\\protected\\extensions\\renderers\\smarty\\plugins\\function.widget.php';
?>

<?php $_smarty_tpl->createLocalArrayVariable('page', null, 0);
$_smarty_tpl->tpl_vars['page']->value['menu'] = array(array('label'=>'Create Departemen','url'=>array('create')));?>

<h1>Data Departemen</h1>
<?php echo smarty_function_widget(array('name'=>'bootstrap.widgets.TbGridView','id'=>'departemen-grid','dataProvider'=>$_smarty_tpl->tpl_vars['model']->value->search(),'filter'=>$_smarty_tpl->tpl_vars['model']->value,'columns'=>array('id','nama',array('class'=>'bootstrap.widgets.TbButtonColumn'))),$_smarty_tpl);?>





<?php }} ?>