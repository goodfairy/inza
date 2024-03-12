<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:53:29
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9ea9936bd15_63975176',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9127c30a7f13fcdb033d483b4faf9adb87d5d54' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/advanced_import/hooks/products/tools_list_items.pre.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9ea9936bd15_63975176 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('import_product_href', "import_presets.manage&object_type=products" ,false ,2);
$_smarty_tpl->_assignInScope('has_permission_an_import', fn_check_permissions("import_presets","update","admin","POST") ,false ,2);
}
}
