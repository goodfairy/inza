<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:28:14
  from '/home/c/cw39500/inz/public_html/design/backend/templates/buttons/save_changes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d69eef62f8_16742036',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ba7455b3a22d0a385060fd0a827fcebd4d1c686' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/buttons/save_changes.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:buttons/button.tpl' => 1,
  ),
),false)) {
function content_65c9d69eef62f8_16742036 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('save_changes'));
$_smarty_tpl->_subTemplateRender("tygh:buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('but_text'=>$_smarty_tpl->__("save_changes"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value), 0, false);
}
}