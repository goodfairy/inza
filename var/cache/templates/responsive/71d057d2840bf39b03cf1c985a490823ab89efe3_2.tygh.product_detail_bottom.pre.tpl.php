<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:16:33
  from '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9e1f1784733_06494299',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71d057d2840bf39b03cf1c985a490823ab89efe3' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/themes/responsive/templates/addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl',
      1 => 1705062458,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl' => 2,
  ),
),false)) {
function content_65c9e1f1784733_06494299 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.set_id.php','function'=>'smarty_function_set_id',),));
if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design'] == "Y" && (defined('AREA') ? constant('AREA') : null) == "C") {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "template_content", null, null);
$_smarty_tpl->_assignInScope('show_shipping_estimation', (($tmp = $_smarty_tpl->tpl_vars['show_shipping_estimation']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping_methods'=>null,'product_id'=>(($tmp = $_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value ?? null)===null||$tmp==='' ? null ?? null : $tmp)), 0, false);
}
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (trim($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content'))) {
if ($_smarty_tpl->tpl_vars['auth']->value['area'] == "A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/geo_maps/hooks/products/product_detail_bottom.pre.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');?>
<!--[/tpl_id]--></span><?php } else {
echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'template_content');
}
}
} else {
$_smarty_tpl->_assignInScope('show_shipping_estimation', (($tmp = $_smarty_tpl->tpl_vars['show_shipping_estimation']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));?>

<?php if ($_smarty_tpl->tpl_vars['show_shipping_estimation']->value) {?>
    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/geo_maps/views/geo_maps/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('shipping_methods'=>null,'product_id'=>(($tmp = $_smarty_tpl->tpl_vars['shipping_estimation_product_id']->value ?? null)===null||$tmp==='' ? null ?? null : $tmp)), 0, true);
}
}
}
}
