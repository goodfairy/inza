<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:54:59
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9eaf3874ba3_86285547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b800b383576901149656dbcfb0ff04bf07b9d90' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/hooks/products/object_picker_products_additional_info.pre.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9eaf3874ba3_86285547 (Smarty_Internal_Template $_smarty_tpl) {
?>
    ${data.variation_features
        ? `<div class="product-variations__variation-features product-variations__variation-features--inline product-variations__variation-features--secondary">
            ${data.variation_features.map(feature => feature['variant']).join(' • ')}&nbsp;—&nbsp;
           </div>`
        : ''
    }
<?php }
}
