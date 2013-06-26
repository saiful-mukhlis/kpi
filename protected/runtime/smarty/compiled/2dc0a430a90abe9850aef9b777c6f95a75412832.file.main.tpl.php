<?php /* Smarty version Smarty-3.1.13, created on 2013-06-25 05:51:55
         compiled from "H:\xampp\htdocs\web12\themes\classic\views\layouts\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:624751c8c15fae7c72-53578877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dc0a430a90abe9850aef9b777c6f95a75412832' => 
    array (
      0 => 'H:\\xampp\\htdocs\\web12\\themes\\classic\\views\\layouts\\main.tpl',
      1 => 1372132309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '624751c8c15fae7c72-53578877',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c8c15fb0af36_87741791',
  'variables' => 
  array (
    'this' => 0,
    'Yii' => 0,
    'content' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c8c15fb0af36_87741791')) {function content_51c8c15fb0af36_87741791($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_debug_print_var')) include 'H:\\xampp\\htdocs\\web12\\protected\\vendors\\Smarty\\plugins\\modifier.debug_print_var.php';
?><!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="id"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['this']->value->page['title'];?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->page['description'];?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->page['keywords'];?>
">
<meta name="language" content="id" />
<meta name="generator" content="WordPress 2.9.1"/>
<meta name="author" content="<?php echo $_smarty_tpl->tpl_vars['this']->value->page['author'];?>
"/>
<meta name="robots" content="index, follow"/>
<meta content="1 days" name="revisit-after"/>

<link rel="shortcut icon"	href="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
/favicon.ico"	type="image/x-icon" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/global/upgrade_browser.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

 <?php echo smarty_modifier_debug_print_var($_smarty_tpl->tpl_vars['page']->value['menu']);?>

<?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/global/backtop.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body><?php }} ?>