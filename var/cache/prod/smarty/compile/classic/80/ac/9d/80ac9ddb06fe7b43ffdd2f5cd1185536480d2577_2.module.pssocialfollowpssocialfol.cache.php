<?php
/* Smarty version 3.1.47, created on 2023-05-12 07:02:53
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_645dd68d4f3a38_00999837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1683792588,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645dd68d4f3a38_00999837 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '529113756645dd68d4eb186_55438826';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1497173770645dd68d4ec7e3_08164706', 'block_social');
?>



<?php }
/* {block 'block_social'} */
class Block_1497173770645dd68d4ec7e3_08164706 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_1497173770645dd68d4ec7e3_08164706',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social col-lg-3 col-md-12 col-sm-12">              
    <a href="http://localhost:8001/fr/">
      <img class="logo img-fluid" src="<?php echo htmlspecialchars(_MODULE_DIR_, ENT_QUOTES, 'UTF-8');?>
ps_socialfollow/footer-logo.png" alt="infinityShop" width="296" height="69">
    </a>
    <h3 class="social-title mt-1">SUIVEZ-NOUS SUR</h3>
    <ul class="mr-3">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
      <li>
          <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noopener noreferrer">
              <?php if ((isset($_smarty_tpl->tpl_vars['social_link']->value['icon']))) {?>
                  <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['img_dir']->value, ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['icon'], ENT_QUOTES, 'UTF-8');?>
" alt="" />
              <?php } else { ?>
                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>

              <?php }?>
          </a>
      </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
