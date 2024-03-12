<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:51:45
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/companies/components/company_status_switcher.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9dc21eeb9e5_13267939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c265ea71e144c14718f836f2739a083203df0e' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/companies/components/company_status_switcher.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/switcher.tpl' => 1,
  ),
),false)) {
function content_65c9dc21eeb9e5_13267939 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['company']->value['company_id'], ENT_QUOTES, 'UTF-8');
$_prefixVariable2 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::OPEN"), ENT_QUOTES, 'UTF-8');
$_prefixVariable3 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("StorefrontStatuses::CLOSED"), ENT_QUOTES, 'UTF-8');
$_prefixVariable4 = ob_get_clean();
ob_start();
echo htmlspecialchars((string) rawurlencode((string)$_smarty_tpl->tpl_vars['config']->value['current_url']), ENT_QUOTES, 'UTF-8');
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_subTemplateRender("tygh:common/switcher.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('meta'=>"company-switch-storefront-status-button",'id'=>"switch_storefront_status_".((string)$_smarty_tpl->tpl_vars['company']->value['company_id']),'checked'=>$_smarty_tpl->tpl_vars['company']->value['storefront_status'] == smarty_modifier_enum("StorefrontStatuses::OPEN"),'extra_attrs'=>array("data-ca-company-id"=>$_prefixVariable2,"data-ca-opened-status"=>$_prefixVariable3,"data-ca-closed-status"=>$_prefixVariable4,"data-ca-return-url"=>$_prefixVariable5)), 0, false);
}
}
