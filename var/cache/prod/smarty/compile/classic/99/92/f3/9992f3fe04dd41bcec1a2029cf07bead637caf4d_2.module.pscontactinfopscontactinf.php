<?php
/* Smarty version 3.1.47, created on 2023-06-10 10:06:21
  from 'module:pscontactinfopscontactinf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_64843d0d8ba8a1_63107639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9992f3fe04dd41bcec1a2029cf07bead637caf4d' => 
    array (
      0 => 'module:pscontactinfopscontactinf',
      1 => 1683492442,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64843d0d8ba8a1_63107639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\prestashop\\vendor\\smarty\\smarty\\libs\\plugins\\function.mailto.php','function'=>'smarty_function_mailto',),));
?>

<div class="block-contact col-md-3 links wrapper">
  <div class="title clearfix hidden-md-up" data-target="#contact-infos" data-toggle="collapse">
    <span class="h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Store information','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">keyboard_arrow_down</i>
        <i class="material-icons remove">keyboard_arrow_up</i>
      </span>
    </span>
  </div>

  <p class="h4 text-uppercase block-contact-title hidden-sm-down"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CONTACTEZ-NOUS','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>
  <div id="contact-infos" class="collapse">
  <div class="row">

      <div class="col-md-12">
      <div class="mb-0">
      <span class="material-icons contact-icon">call</span>
      <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'TEL: [1]%phone%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      <?php }?>
        </div>
      </div>

      <div class="col-md-12">
      <div class="mb-0">
         <span class="material-icons contact-icon">location_on</span>
         <?php if ((isset($_smarty_tpl->tpl_vars['contact_infos']->value['address']))) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'ADRESSE: [1]%adress%[/1]','sprintf'=>array('[1]'=>'<span>','[/1]'=>'</span>','%address1%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['address']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

        <?php }?>
         </div>
        </div>
   
      <div class="col-md-12">
      <div>
      <span class="material-icons contact-icon">mail</span>
    <?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['email'] && $_smarty_tpl->tpl_vars['display_email']->value) {?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      <?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['contact_infos']->value['email'],'encode'=>"javascript"),$_smarty_tpl);?>

    <?php }?>
        </div>
      </div>
  </div>
    
  </div>
</div>
<?php }
}
