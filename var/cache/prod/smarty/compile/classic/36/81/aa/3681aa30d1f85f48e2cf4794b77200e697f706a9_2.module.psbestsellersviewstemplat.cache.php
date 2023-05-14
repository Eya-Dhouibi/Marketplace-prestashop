<?php
/* Smarty version 3.1.47, created on 2023-05-12 07:03:29
  from 'module:psbestsellersviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_645dd6b1b44402_64786610',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3681aa30d1f85f48e2cf4794b77200e697f706a9' => 
    array (
      0 => 'module:psbestsellersviewstemplat',
      1 => 1683744959,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_645dd6b1b44402_64786610 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1986983324645dd6b1b35422_11306849';
?>
 <section class="main-content mt-3">
 <div class="progress-title px-md-5">
  <h1><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MEILLEURS VENTES','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h1>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
  </div>
</div>
 <div class="products">
   <div id="carouselBestSellers" class="carousel slide" data-ride="carousel" data-interval="false">
     <a class="carousel-control-prev" href="#carouselBestSellers" role="button" data-slide="prev">
       <div class="circle_prev">
        <span class="material-icons-outlined carousel-icon carousel-control-prev-icon" aria-hidden="true">arrow_back_ios</span>
      </div>
     </a>
     <div class="carousel-inner mt-2">
       <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'slider_loop', array (
  'iteration' => true,
  'first' => true,
  'last' => true,
  'index' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['index'];
$_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['total'];
?>
         <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration'] : null)%5 == 1) {?>
           <div class="carousel-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['first'] : null)) {?>active<?php }?>">
             <div class="row product-slider">
         <?php }?>
         <div class="col-12 col-sm-6 col-md-4 col-lg-2">
           <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
         </div>
         <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['iteration'] : null)%5 == 0 || (isset($_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_slider_loop']->value['last'] : null)) {?>
             </div>
           </div>
         <?php }?>
       <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
     </div>
     <a class="carousel-control-next" href="#carouselBestSellers" role="button" data-slide="next">
     <div class="circle_next">
       <span class="material-icons carousel-icon carousel-control-next-icon" aria-hidden="true">arrow_forward_ios</span>
     </div>
     </a>
   </div>
 </div>
</section>


<?php }
}
