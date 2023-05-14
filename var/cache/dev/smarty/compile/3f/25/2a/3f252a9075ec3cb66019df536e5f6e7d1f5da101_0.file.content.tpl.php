<?php
/* Smarty version 3.1.47, created on 2023-05-14 08:31:36
  from 'C:\laragon\www\prestashop\admin0395oeexz\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64608e58d970f1_07134993',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f252a9075ec3cb66019df536e5f6e7d1f5da101' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\admin0395oeexz\\themes\\default\\template\\content.tpl',
      1 => 1682427647,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64608e58d970f1_07134993 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>

<div class="row">
	<div class="col-lg-12">
		<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
