<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 14:30:04
         compiled from "E:\data\xampp\xampp\htdocs\web8\themes\classic\views\global\backtop.tpl" */ ?>
<?php /*%%SmartyHeaderCode:979351bf014cc21d50-11609282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b8ba4968287fadf015767f60ad8523c47d70e9' => 
    array (
      0 => 'E:\\data\\xampp\\xampp\\htdocs\\web8\\themes\\classic\\views\\global\\backtop.tpl',
      1 => 1370884549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '979351bf014cc21d50-11609282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Yii' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf014cc608c7_55989033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf014cc608c7_55989033')) {function content_51bf014cc608c7_55989033($_smarty_tpl) {?><div id="back-top" style="display: block;"><a href="#header"><span></span></a></div>
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