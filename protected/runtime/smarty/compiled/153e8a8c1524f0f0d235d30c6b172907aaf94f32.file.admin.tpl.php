<?php /* Smarty version Smarty-3.1.13, created on 2013-06-25 05:48:15
         compiled from "H:\xampp\htdocs\web12\protected\views\departemen\admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810751c90ccb406eb5-35782096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153e8a8c1524f0f0d235d30c6b172907aaf94f32' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web12\\protected\\views\\departemen\\admin.tpl',
      1 => 1372132092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810751c90ccb406eb5-35782096',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c90ccb458262_13491876',
  'variables' => 
  array (
    'model' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c90ccb458262_13491876')) {function content_51c90ccb458262_13491876($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'H:\\xampp\\htdocs\\web12\\protected\\extensions\\renderers\\smarty\\plugins\\function.widget.php';
if (!is_callable('smarty_modifier_debug_print_var')) include 'H:\\xampp\\htdocs\\web12\\protected\\vendors\\Smarty\\plugins\\modifier.debug_print_var.php';
?>

<?php $_smarty_tpl->createLocalArrayVariable('page', null, 0);
$_smarty_tpl->tpl_vars['page']->value['menu'] = array(array('label'=>'Create Departemen','url'=>array('create')));?>

<h1>Data Departemen</h1>
<?php echo smarty_function_widget(array('name'=>'bootstrap.widgets.TbGridView','id'=>'departemen-grid','dataProvider'=>$_smarty_tpl->tpl_vars['model']->value->search(),'filter'=>$_smarty_tpl->tpl_vars['model']->value,'columns'=>array('id','nama',array('class'=>'bootstrap.widgets.TbButtonColumn'))),$_smarty_tpl);?>





 <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['page']->value['menu']);?>
<?php }} ?>