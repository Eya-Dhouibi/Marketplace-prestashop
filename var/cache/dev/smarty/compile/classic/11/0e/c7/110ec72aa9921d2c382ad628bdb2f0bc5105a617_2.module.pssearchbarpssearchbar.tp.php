<?php
/* Smarty version 3.1.47, created on 2023-05-14 13:14:43
  from 'module:pssearchbarpssearchbar.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_6460d0b3f0cb88_87426896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110ec72aa9921d2c382ad628bdb2f0bc5105a617' => 
    array (
      0 => 'module:pssearchbarpssearchbar.tp',
      1 => 1683390675,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6460d0b3f0cb88_87426896 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin C:\laragon\www\prestashop/themes/classic/modules/ps_searchbar/ps_searchbar.tpl -->
 <div id="search_widget" class="search-widget" data-search-controller-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">
  <form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_controller_url']->value, ENT_QUOTES, 'UTF-8');?>
">  
      <div class="input-group">
	    <input type="hidden" name="controller" value="search">
		<input type="text" class="form-control" name="s" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search_string']->value, ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recherche','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" 
		aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
		<button type="submit">
		<div class="circle">
        <i class="material-icons search">&#xE8B6;</i>
        </div>
	    <span class="hidden-xl-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
	    </button>
      </div>
  </form>
</div> 



<!-- end C:\laragon\www\prestashop/themes/classic/modules/ps_searchbar/ps_searchbar.tpl --><?php }
}
