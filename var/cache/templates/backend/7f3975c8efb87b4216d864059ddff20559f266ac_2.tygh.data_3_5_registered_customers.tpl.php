<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:27:18
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_5_registered_customers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d666ce02a9_99858578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f3975c8efb87b4216d864059ddff20559f266ac' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_5_registered_customers.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9d666ce02a9_99858578 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.enum.php','function'=>'smarty_modifier_enum',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.registered_customers','dashboard.analytics_card.view_customers'));
if (!empty($_smarty_tpl->tpl_vars['general_stats']->value['customers'])) {
ob_start();
echo htmlspecialchars((string) smarty_modifier_enum("UserTypes::CUSTOMER"), ENT_QUOTES, 'UTF-8');
$_prefixVariable21=ob_get_clean();
$_smarty_tpl->_assignInScope('data_3_5_registered_customers', array('id'=>"analytics_card_registered_customers",'title'=>$_smarty_tpl->__("dashboard.analytics_card.registered_customers"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_customers"),'href'=>"profiles.manage?user_type=".$_prefixVariable21),'number'=>number_format($_smarty_tpl->tpl_vars['general_stats']->value['customers']['registered_customers'])));
$_smarty_tpl->_assignInScope('data_3_5_registered_customers', $_smarty_tpl->tpl_vars['data_3_5_registered_customers']->value ,false ,2);
}
}
}
