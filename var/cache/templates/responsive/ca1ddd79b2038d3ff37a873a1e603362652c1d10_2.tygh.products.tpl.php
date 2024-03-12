<?php
/* Smarty version 4.1.1, created on 2024-02-12 14:54:13
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/blocks/products/products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65ca06e5e231b3_79125503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca1ddd79b2038d3ff37a873a1e603362652c1d10' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/blocks/products/products.tpl',
      1 => 1705061594,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:blocks/list_templates/products_list.tpl' => 2,
  ),
),false)) {
function content_65ca06e5e231b3_79125503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_options'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_product_options', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_product_options', true);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'no_sorting'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'no_pagination'=>true,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_product_labels'=>true,'product_labels_mini'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_product_options'=>$_smarty_tpl->tpl_vars['_show_product_options']->value,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number']), 0, false);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_add_to_cart', true);
}?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_options'] == "Y") {?>
    <?php $_smarty_tpl->_assignInScope('_show_product_options', false);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('_show_product_options', true);
}?>

<?php $_smarty_tpl->_subTemplateRender("tygh:blocks/list_templates/products_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['items']->value,'no_sorting'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'no_pagination'=>true,'show_name'=>true,'show_sku'=>true,'show_rating'=>true,'show_features'=>true,'show_prod_descr'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_list_discount'=>true,'show_product_labels'=>true,'product_labels_mini'=>true,'show_discount_label'=>true,'show_shipping_label'=>true,'show_product_amount'=>true,'show_product_options'=>$_smarty_tpl->tpl_vars['_show_product_options']->value,'show_qty'=>true,'show_min_qty'=>true,'show_product_edp'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'show_list_buttons'=>true,'show_descr'=>true,'but_role'=>"action",'item_number'=>$_smarty_tpl->tpl_vars['block']->value['properties']['item_number']), 0, true);
}
}
}
