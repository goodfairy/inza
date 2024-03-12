<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:53
  from '/home/c/cw39500/inz/public_html/design/backend/templates/common/previewer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8d56ecef7_59654940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eac29185dbe9186c9018eb74f5afbe1cdf820b7c' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/common/previewer.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9a8d56ecef7_59654940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);
}
}
