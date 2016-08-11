<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 14:54:58
         compiled from "C:\xampp\htdocs\tienda\admin977gbqrpt\themes\default\template\helpers\list\list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1329957a8e3923240d1-28152173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12d6ca1d90ca827896d111ba4828090b21ed9262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin977gbqrpt\\themes\\default\\template\\helpers\\list\\list_action_preview.tpl',
      1 => 1470677476,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1329957a8e3923240d1-28152173',
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
  'unifunc' => 'content_57a8e39232bdd3_38524057',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8e39232bdd3_38524057')) {function content_57a8e39232bdd3_38524057($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
