<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:27:18
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_6_activity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d666d01645_56483615',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42ed537c88a12cc0819355621b3bef459eacdfd2' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_data/data_3_6_activity.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9d666d01645_56483615 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.activity','dashboard.view_all','order'));
if ($_smarty_tpl->tpl_vars['logs']->value && fn_check_view_permissions("logs.manage","GET")) {
$_smarty_tpl->_assignInScope('data_3_6_activity', array('id'=>"analytics_card_activity",'title'=>$_smarty_tpl->__("dashboard.analytics_card.activity"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.view_all"),'href'=>"logs.manage"),'resource_list'=>array('id'=>"analytics_card_products_resource_list",'content'=>array())));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['logs']->value, 'item', false, 'log_key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log_key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->_assignInScope('_type', "log_type_".((string)$_smarty_tpl->tpl_vars['item']->value['type']));
$_smarty_tpl->_assignInScope('_action', "log_action_".((string)$_smarty_tpl->tpl_vars['item']->value['action']));
$_smarty_tpl->_assignInScope('item_name', $_smarty_tpl->__($_smarty_tpl->tpl_vars['_type']->value));
if ($_smarty_tpl->tpl_vars['item']->value['action']) {
ob_start();
echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['_action']->value);
$_prefixVariable22=ob_get_clean();
$_smarty_tpl->_assignInScope('item_name', ((string)$_smarty_tpl->tpl_vars['item_name']->value)."&nbsp;(".$_prefixVariable22.")");
}
if ($_smarty_tpl->tpl_vars['item']->value['type'] === "users" && fn_check_view_permissions(fn_url("profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")) {
$_smarty_tpl->_assignInScope('item_description', $_smarty_tpl->tpl_vars['item']->value['content']['user']);
if ($_smarty_tpl->tpl_vars['item']->value['content']['id']) {
$_smarty_tpl->_assignInScope('item_description_href', "profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id']));
}
} elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === "orders" && fn_check_view_permissions(fn_url("orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")) {
$_smarty_tpl->_assignInScope('item_name', ((string)$_smarty_tpl->tpl_vars['item_name']->value)." ".((string)$_smarty_tpl->tpl_vars['item']->value['content']['status']));
ob_start();
echo $_smarty_tpl->__("order");
$_prefixVariable23=ob_get_clean();
$_smarty_tpl->_assignInScope('item_description', $_prefixVariable23."&nbsp;".((string)$_smarty_tpl->tpl_vars['item']->value['content']['order']));
$_smarty_tpl->_assignInScope('item_description_href', "orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id']));
} elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === "products" && fn_check_view_permissions(fn_url("products.update?product_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")) {
$_smarty_tpl->_assignInScope('item_description', $_smarty_tpl->tpl_vars['item']->value['content']['product']);
$_smarty_tpl->_assignInScope('item_description_href', "products.update?product_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id']));
} elseif ($_smarty_tpl->tpl_vars['item']->value['type'] === "categories" && fn_check_view_permissions(fn_url("categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id'])),"GET")) {
$_smarty_tpl->_assignInScope('item_description', $_smarty_tpl->tpl_vars['item']->value['content']['category']);
$_smarty_tpl->_assignInScope('item_description_href', "categories.update?category_id=".((string)$_smarty_tpl->tpl_vars['item']->value['content']['id']));
}
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_3_6_activity']) ? $_smarty_tpl->tpl_vars['data_3_6_activity']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list']['content'][] = array('id'=>"analytics_card_activity_".((string)$_smarty_tpl->tpl_vars['log_key']->value),'name'=>$_smarty_tpl->tpl_vars['item_name']->value,'href'=>$_smarty_tpl->tpl_vars['item_href']->value,'value'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['item']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])),'description'=>$_smarty_tpl->tpl_vars['item_description']->value,'description_href'=>$_smarty_tpl->tpl_vars['item_description_href']->value);
$_smarty_tpl->_assignInScope('data_3_6_activity', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('data_3_6_activity', $_smarty_tpl->tpl_vars['data_3_6_activity']->value ,false ,2);
}
}
}
