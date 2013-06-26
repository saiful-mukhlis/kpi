<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 14:34:37
         compiled from "E:\data\xampp\xampp\htdocs\web8\themes\classic\views\site\_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2487151bf025dacb567-81326982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '730d5e3f100099d068837a11c04ed21774a6273a' => 
    array (
      0 => 'E:\\data\\xampp\\xampp\\htdocs\\web8\\themes\\classic\\views\\site\\_item.tpl',
      1 => 1371209954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2487151bf025dacb567-81326982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Yii' => 0,
    'data' => 0,
    'this' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf025dbfebd8_00194892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf025dbfebd8_00194892')) {function content_51bf025dbfebd8_00194892($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include 'E:\\data\\xampp\\xampp\\htdocs\\web8\\protected\\vendors\\Smarty\\plugins\\modifier.replace.php';
?>	<div class="span4 benner-h2"  style="margin-left: 0px;padding: 10px;">
		<h2>Herbalife</h2>
		<div class="span12" style="margin-left: 0px;">
			<img src="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
/img/<?php echo $_smarty_tpl->tpl_vars['data']->value->image;?>
" alt="<?php if ($_smarty_tpl->tpl_vars['data']->value->alt_image==null){?><?php echo $_smarty_tpl->tpl_vars['data']->value->title;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['data']->value->alt_image;?>
<?php }?>" />
		</div>
		<div class="span12 benner-h3" style="margin-left: 0px;">
			<h3>
				<a href="<?php ob_start();?><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['data']->value->name,array(' ','---','--'),'-');?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['this']->value->createUrl('site/item',array('id'=>$_smarty_tpl->tpl_vars['data']->value->id,'s'=>$_tmp1));?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->name;?>
</a>
			</h3>
		</div>
		<div class="span12">
			<p><?php echo $_smarty_tpl->tpl_vars['data']->value->sort_desc;?>
</p>
		</div>
	</div><?php }} ?>