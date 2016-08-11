<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 19:42:55
         compiled from "C:\xampp\htdocs\tienda\admin\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2641557a8c49f995865-18305815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce42cb6f05229fa5444712f3792d801d1c953d4f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1470677472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2641557a8c49f995865-18305815',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c49f9a13f6_89142015',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c49f9a13f6_89142015')) {function content_57a8c49f9a13f6_89142015($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
