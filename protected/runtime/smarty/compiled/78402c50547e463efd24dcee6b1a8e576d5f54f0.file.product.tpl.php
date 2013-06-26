<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 14:30:27
         compiled from "E:\data\xampp\xampp\htdocs\web8\themes\classic\views\site\product.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3079351bf01634fe378-15988460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78402c50547e463efd24dcee6b1a8e576d5f54f0' => 
    array (
      0 => 'E:\\data\\xampp\\xampp\\htdocs\\web8\\themes\\classic\\views\\site\\product.tpl',
      1 => 1371223240,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3079351bf01634fe378-15988460',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Yii' => 0,
    'ps' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf01635ebb91_12562022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf01635ebb91_12562022')) {function content_51bf01635ebb91_12562022($_smarty_tpl) {?><?php if (!is_callable('smarty_function_widget')) include 'E:\\data\\xampp\\xampp\\htdocs\\web8\\protected\\extensions\\renderers\\smarty\\plugins\\function.widget.php';
?><?php echo $_smarty_tpl->getSubTemplate ('themes/classic/views/global/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<div class="container-fluid content p0"><div class="row-fluid"><div class="span12">
<img src="<?php echo $_smarty_tpl->tpl_vars['Yii']->value->baseUrl;?>
/img/produk-herbalife-indonesia.jpg" alt="" />
</div></div></div>




<div class="container">
<h1>weThink & weCreate We envision the future, then make it happenx.</h1>
</div>

<div class="container-fluid content  mt100 benner"><div class="row-fluid"><div class="span12">
<div class="span3" style="border-right: 1px solid #ccc">
<ul class="nav nav-list">
                <li class="nav-header">List header</li>
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Dropdown</a>
                <ul  class="dropdown-menu" role="menu" aria-labelledby="drop4">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                  <li class="dropdown-submenu">
                <a tabindex="-1" href="#">Dropdown</a>
                <ul  class="dropdown-menu" role="menu" aria-labelledby="drop4">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                  <li role="presentation" class="divider"></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                </ul>
              </li>
                </ul>
              </li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Applications</a></li>
                <li class="nav-header">Another list header</li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Settings</a></li>
                <li class="divider"></li>
                <li><a href="#">Help</a></li>
              </ul>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="span9">
	<?php echo smarty_function_widget(array('name'=>"bootstrap.widgets.TbListView",'dataProvider'=>$_smarty_tpl->tpl_vars['ps']->value,'itemView'=>'_item','template'=>'<div class="span12">{summary}{sorter}</div>{items}<div  class="span12">{pager}</div>'),$_smarty_tpl);?>

</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


</div></div></div>
 
                
                
                
                
                



           <?php }} ?>