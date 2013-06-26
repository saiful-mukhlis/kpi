<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 14:35:10
         compiled from "themes\classic\views\global\backtop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1810251bf027eb3c6d7-94398108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b2f94f7e39160e03b8da984f85fbd3253968db4' => 
    array (
      0 => 'themes\\classic\\views\\global\\backtop.tpl',
      1 => 1370884549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1810251bf027eb3c6d7-94398108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Yii' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf027eb83fe8_97799990',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf027eb83fe8_97799990')) {function content_51bf027eb83fe8_97799990($_smarty_tpl) {?><div id="back-top" style="display: block;"><a href="#header"><span></span></a></div>
<?php $_smarty_tpl->tpl_vars['c'] = new Smarty_variable(Yii::app()->clientScript->registerCssFile(((string)$_smarty_tpl->tpl_vars['Yii']->value->baseUrl)."/css/backtop.css"), null, 0);?>
<?php $_smarty_tpl->tpl_vars['d'] = new Smarty_variable(Yii::app()->clientScript->registerScript('backtop','
$("#back-top").hide();
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$("#back-top").fadeIn();
			} else {
				$("#back-top").fadeOut();
			}
		});

		// ke atas
		$("#back-top a").click(function () {
			$("body,html").animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});		
',CClientScript::POS_END), null, 0);?>

<?php }} ?>