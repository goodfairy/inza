<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:27:18
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_4_stores.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d666cd5ca7_71133141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f26ae2ada26c46c7f4f851f08957620856a95c5' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_4_stores.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9d666cd5ca7_71133141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.vendors','dashboard.analytics_card.view_vendors','dashboard.analytics_card.stores','dashboard.analytics_card.view_stores'));
if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['companies']) && $_smarty_tpl->tpl_vars['auth']->value['user_type'] === smarty_modifier_enum("UserTypes::ADMIN") && !$_smarty_tpl->tpl_vars['runtime']->value['company_id']) {
if (fn_allowed_for("MULTIVENDOR")) {
$_smarty_tpl->_assignInScope('stores_text', $_smarty_tpl->__("dashboard.analytics_card.vendors"));
$_smarty_tpl->_assignInScope('view_stores_text', $_smarty_tpl->__("dashboard.analytics_card.view_vendors"));
} else {
$_smarty_tpl->_assignInScope('stores_text', $_smarty_tpl->__("dashboard.analytics_card.stores"));
$_smarty_tpl->_assignInScope('view_stores_text', $_smarty_tpl->__("dashboard.analytics_card.view_stores"));
}
$_smarty_tpl->_assignInScope('data_3_4_stores', array('id'=>"analytics_card_stores",'title'=>$_smarty_tpl->tpl_vars['stores_text']->value,'title_button'=>array('name'=>$_smarty_tpl->tpl_vars['view_stores_text']->value,'href'=>"companies.manage"),'number'=>number_format($_smarty_tpl->tpl_vars['general_stats']->value['companies']['total_companies'])));
$_smarty_tpl->_assignInScope('data_3_4_stores', $_smarty_tpl->tpl_vars['data_3_4_stores']->value ,false ,2);
}
}
}
