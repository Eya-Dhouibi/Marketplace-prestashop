<?php
/* Smarty version 3.1.47, created on 2023-05-12 07:03:29
  from 'module:celluleviewstemplateshook' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_645dd6b1d9cf42_95961630',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '966637baa71ab928ba0654b9f74d93370fc87aa5' => 
    array (
      0 => 'module:celluleviewstemplateshook',
      1 => 1683751091,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645dd6b1d9cf42_95961630 (Smarty_Internal_Template $_smarty_tpl) {
?><section class="main-content mt-3">
<div class="progress-title px-md-5">
<div class="cellule-brand">
  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'NOS CELLULES','d'=>'Modules.cellule.Shop'),$_smarty_tpl ) );?>
</h1>
  <img class="mb-1 ml-1" src="<?php echo htmlspecialchars(_MODULE_DIR_, ENT_QUOTES, 'UTF-8');?>
cellule/views/img/cellule_logo.png" alt="">
</div>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
  <div class="cellules">
  <div id="carouselCellules" class="carousel slide" data-ride="carousel" data-interval="false">
    <a class="carousel-control-prev" href="#carouselCellules" role="button" data-slide="prev">
    <div class="circle_prev mt-3">
      <span class="material-icons carousel-icon carousel-control-prev-icon" aria-hidden="true">arrow_back_ios</span>
    </div>
    </a>

    <div class="carousel-inner cellule-carousel">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cellules']->value, 'cellule', false, NULL, 'slider_loop', array (
  'iteration' => true,
  'first' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['cellule']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cellule']->value) {
$_smarty_tpl->tpl_vars['cellule']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['total'];
?>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration'] : null)%4 == 1) {?>
          <div class="carousel-item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['first'] : null)) {?> active<?php }?>">
            <div class="row cellule-slider">
        <?php }?>
        <div class="col-12 col-md-3">
          <a href="" class="thumbnail cellule-thumbnail">
            <img src="/prestashop/img/cellule_logo/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cellule']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="logo" style="width:100px;"/>
          </a>
        </div>
        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration'] : null)%4 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['last'] : null)) {?>
            </div>
          </div>
        <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>

    <a class="carousel-control-next" href="#carouselCellules" role="button" data-slide="next">
    <div class="circle_next mt-3">
      <span class="material-icons carousel-icon carousel-control-next-icon" aria-hidden="true">arrow_forward_ios</span>
    </div>
    </a>
  </div>
</div>

<div class="cellule_list">
<a class="btn h2 cellule-btn" type="button" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('cellule','list',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    Voir Nos Cellules
    <img class="ml-2 mb-1" src="<?php echo htmlspecialchars(_MODULE_DIR_, ENT_QUOTES, 'UTF-8');?>
cellule/views/img/cellule_icon.png" alt="">
</a>
</div>

</section>

<?php }
}
