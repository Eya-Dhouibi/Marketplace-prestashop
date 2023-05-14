<?php
/* Smarty version 3.1.47, created on 2023-05-13 14:27:43
  from 'module:celluleviewstemplateshook' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_645f904faa1381_18566438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d891a038a0e3f889a66bf123eab765980f22130' => 
    array (
      0 => 'module:celluleviewstemplateshook',
      1 => 1683739756,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645f904faa1381_18566438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1752353078645f904fa9c2d9_01619580';
?>
<!-- begin C:\laragon\www\prestashop/themes/classic/modules/cellule/views/templates/hook/btncellule.tpl -->

<section class="clearfix">
<div class="cellule_list">
  <a class="btn h2 cellule-btn cellule-btn-top" type="botton" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('cellule','list',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
  Voir Nos Cellules
  <img class="ml-2 mb-1" src="<?php echo htmlspecialchars(_MODULE_DIR_, ENT_QUOTES, 'UTF-8');?>
cellule/views/img/cellule_icon.png" alt=""></a>
  </div>
</section>

<!-- end C:\laragon\www\prestashop/themes/classic/modules/cellule/views/templates/hook/btncellule.tpl --><?php }
}
