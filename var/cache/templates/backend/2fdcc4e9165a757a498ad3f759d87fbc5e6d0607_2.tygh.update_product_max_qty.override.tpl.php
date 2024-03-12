<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:54:59
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9eaf33e2846_54516464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fdcc4e9165a757a498ad3f759d87fbc5e6d0607' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/hooks/products/update_product_max_qty.override.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9eaf33e2846_54516464 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("max_qty")) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
