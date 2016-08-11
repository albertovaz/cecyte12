<?php /* Smarty version Smarty-3.1.19, created on 2016-08-08 19:42:53
         compiled from "C:\xampp\htdocs\tienda\admin\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2816857a8c49da93004-58947786%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fb1d0aac9a45b5d674dbfa48433d0feaa7bbc8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tienda\\admin\\themes\\default\\template\\content.tpl',
      1 => 1470677469,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2816857a8c49da93004-58947786',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57a8c49dac1e05_34825533',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a8c49dac1e05_34825533')) {function content_57a8c49dac1e05_34825533($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
