<?php /* Smarty version Smarty-3.1.13, created on 2013-06-24 09:29:12
         compiled from "E:\data\xampp\xampp\htdocs\web12\themes\classic\views\site\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1907051c7f080687d48-99128828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87f392ae343f7b5b83d81ac23115aa2b850c1bd9' => 
    array (
      0 => 'E:\\data\\xampp\\xampp\\htdocs\\web12\\themes\\classic\\views\\site\\login.tpl',
      1 => 1372058950,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1907051c7f080687d48-99128828',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51c7f08081a598_62139231',
  'variables' => 
  array (
    'model' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51c7f08081a598_62139231')) {function content_51c7f08081a598_62139231($_smarty_tpl) {?><?php if (!is_callable('smarty_block_form')) include 'E:\\data\\xampp\\xampp\\htdocs\\web12\\protected\\extensions\\renderers\\smarty\\plugins\\block.form.php';
?>

<style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 500px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>


<div class="container">


	<?php $_smarty_tpl->smarty->_tag_stack[] = array('form', array('name'=>"form",'id'=>'product-form','enableAjaxValidation'=>true,'htmlOptions'=>array('class'=>'','enableClientValidation'=>true,'clientOptions'=>array('validateOnSubmit'=>true)))); $_block_repeat=true; echo smarty_block_form(array('name'=>"form",'id'=>'product-form','enableAjaxValidation'=>true,'htmlOptions'=>array('class'=>'','enableClientValidation'=>true,'clientOptions'=>array('validateOnSubmit'=>true))), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

	<div class="form-signin">
		<h2 class="form-signin-heading">Please sign in</h2>
	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'username',array('class'=>'span3','maxlength'=>100));?>

	<?php echo $_smarty_tpl->tpl_vars['form']->value->textFieldRow($_smarty_tpl->tpl_vars['model']->value,'password',array('class'=>'span3','maxlength'=>255));?>


	<div class="control-group ">
		<label class="checkbox">
          <?php echo $_smarty_tpl->tpl_vars['form']->value->checkBox($_smarty_tpl->tpl_vars['model']->value,'rememberMe');?>
 Remember me
          <?php echo $_smarty_tpl->tpl_vars['form']->value->error($_smarty_tpl->tpl_vars['model']->value,'rememberMe');?>

        </label>
	</div>



	
	<div style="text-align: right;"><button type="submit" class="btn btn-primary">Save</button></div>
	</div>
	
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_form(array('name'=>"form",'id'=>'product-form','enableAjaxValidation'=>true,'htmlOptions'=>array('class'=>'','enableClientValidation'=>true,'clientOptions'=>array('validateOnSubmit'=>true))), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 


</div> <!-- /container --><?php }} ?>