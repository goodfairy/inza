<?php
/* Smarty version 4.1.1, created on 2024-02-14 14:57:14
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65ccaa9aedd518_08269480',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1f247df1f5e28b89292f05e6a105b941b71d76f' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/profiles/components/context_menu/notify_checkboxes.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/notify_checkboxes.tpl' => 1,
  ),
),false)) {
function content_65ccaa9aedd518_08269480 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('notify_user'));
?>

<?php $_smarty_tpl->_subTemplateRender("tygh:common/notify_checkboxes.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('prefix'=>"multiple",'id'=>"select",'notify'=>true,'notify_customer_status'=>true,'notify_text'=>$_smarty_tpl->__("notify_user"),'name_prefix'=>"notify"), 0, false);
}
}
