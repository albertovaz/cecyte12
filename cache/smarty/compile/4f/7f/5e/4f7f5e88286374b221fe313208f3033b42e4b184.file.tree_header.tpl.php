<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 15:30:14
         compiled from "C:\xampp\htdocs\tienda\admin977gbqrpt\themes\default\template\helpers\tree\tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:955757a8ebd6431b51-14088758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f7f5e88286374b221fe313208f3033b42e4b184' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin977gbqrpt\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1470677476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '955757a8ebd6431b51-14088758',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8ebd643d6d0_53066946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8ebd643d6d0_53066946')) {function content_57a8ebd643d6d0_53066946($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
