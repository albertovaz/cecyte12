<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 19:42:59
         compiled from "C:\xampp\htdocs\tienda\admin\themes\default\template\helpers\list\list_action_removestock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2629357a8c4a3b1d117-54095567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edf6dee60f929157fc115164a1fed854ed0a0b20' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin\\themes\\default\\template\\helpers\\list\\list_action_removestock.tpl',
      1 => 1470677476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2629357a8c4a3b1d117-54095567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c4a3b28c91_41269483',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c4a3b28c91_41269483')) {function content_57a8c4a3b28c91_41269483($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-circle-arrow-down"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a>
<?php }} ?>
