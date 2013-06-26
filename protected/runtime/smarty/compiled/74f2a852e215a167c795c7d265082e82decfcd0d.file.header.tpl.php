<?php /* Smarty version Smarty-3.1.13, created on 2013-06-25 04:56:48
         compiled from "themes\classic\views\global\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2337151bf014c9eddd8-90258969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74f2a852e215a167c795c7d265082e82decfcd0d' => 
    array (
      0 => 'themes\\classic\\views\\global\\header.tpl',
      1 => 1372129006,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2337151bf014c9eddd8-90258969',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf014cb9e106_45051854',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf014cb9e106_45051854')) {function content_51bf014cb9e106_45051854($_smarty_tpl) {?><?php if (!is_callable('smarty_function_t')) include 'H:\\xampp\\htdocs\\web12\\protected\\extensions\\renderers\\smarty\\plugins\\function.t.php';
?>    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"><?php echo smarty_function_t(array('text'=>'Project Name','cat'=>'app'),$_smarty_tpl);?>
</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link">Username</a>
            </p>
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div><?php }} ?>