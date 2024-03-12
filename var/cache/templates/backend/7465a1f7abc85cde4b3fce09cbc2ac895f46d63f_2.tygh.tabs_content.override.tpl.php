<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:54:59
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/hooks/products/tabs_content.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9eaf3721b89_63230089',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7465a1f7abc85cde4b3fce09cbc2ac895f46d63f' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/hooks/products/tabs_content.override.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9eaf3721b89_63230089 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/block.hook.php','function'=>'smarty_block_hook',),));
if (!$_smarty_tpl->tpl_vars['product_type']->value->isFieldAvailable("tabs_content")) {?>
    <?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('hook', array('name'=>"product_variations:tabs_content"));
$_block_repeat=true;
echo smarty_block_hook(array('name'=>"product_variations:tabs_content"), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
$_block_repeat=false;
echo smarty_block_hook(array('name'=>"product_variations:tabs_content"), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
