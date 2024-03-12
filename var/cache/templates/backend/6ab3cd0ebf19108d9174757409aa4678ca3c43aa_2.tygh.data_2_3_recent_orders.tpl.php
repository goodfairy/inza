<?php
/* Smarty version 4.1.1, created on 2024-02-12 11:27:18
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_data/data_2_3_recent_orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9d666c9aeb2_46587496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ab3cd0ebf19108d9174757409aa4678ca3c43aa' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/index/components/analytics_section/analytics_data/data_2_3_recent_orders.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:common/price.tpl' => 2,
  ),
),false)) {
function content_65c9d666c9aeb2_46587496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
\Tygh\Languages\Helper::preloadLangVars(array('dashboard.analytics_card.recent_orders','dashboard.analytics_card.view_orders','all','order','order'));
if (!empty($_smarty_tpl->tpl_vars['order_statuses']->value)) {
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', array('id'=>"analytics_card_recent_orders",'title'=>$_smarty_tpl->__("dashboard.analytics_card.recent_orders"),'title_button'=>array('name'=>$_smarty_tpl->__("dashboard.analytics_card.view_orders"),'href'=>"orders.manage"),'resource_list_tabs'=>array()));
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_2_3_recent_orders']) ? $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list_tabs']['content'] = array();
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_2_3_recent_orders']) ? $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list_tabs']['id'] = "analytics_card_recent_orders_tabs";
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_2_3_recent_orders']) ? $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list_tabs']['content'][0]['id'] = "analytics_card_recent_orders_tab_all";
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_2_3_recent_orders']) ? $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list_tabs']['content'][0]['title'] = $_smarty_tpl->__("all");
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_tmp_array);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value['all'], 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order']->value['total']), 0, true);
$_smarty_tpl->assign('order_total_price', ob_get_clean());
ob_start();
echo $_smarty_tpl->__("order");
$_prefixVariable10=ob_get_clean();
$_smarty_tpl->_assignInScope('tab_content', array('id'=>$_smarty_tpl->tpl_vars['order']->value['order_id'],'name'=>$_prefixVariable10." #".((string)$_smarty_tpl->tpl_vars['order']->value['order_id']),'value'=>$_smarty_tpl->tpl_vars['order_total_price']->value,'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order']->value['order_id']),'description'=>((string)$_smarty_tpl->tpl_vars['order']->value['lastname'])." ".((string)$_smarty_tpl->tpl_vars['order']->value['firstname']),'small_text'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])),'label_id'=>mb_strtolower($_smarty_tpl->tpl_vars['order']->value['status'], 'UTF-8'),'label_text'=>$_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['order']->value['status']]['description'],'label_class'=>"o-status-".((string)(mb_strtolower($_smarty_tpl->tpl_vars['order']->value['status'], 'UTF-8')))));
if ($_smarty_tpl->tpl_vars['order']->value['user_id']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['tab_content']) ? $_smarty_tpl->tpl_vars['tab_content']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description_href'] = "profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['order']->value['user_id']);
$_smarty_tpl->_assignInScope('tab_content', $_tmp_array);
}
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_2_3_recent_orders']) ? $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list_tabs']['content'][0]['content'][] = $_smarty_tpl->tpl_vars['tab_content']->value;
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_statuses']->value, 'status', false, NULL, 'order_statuses_array', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_order_statuses_array']->value['iteration']++;
$_smarty_tpl->_assignInScope('status_index', (isset($_smarty_tpl->tpl_vars['__smarty_foreach_order_statuses_array']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_order_statuses_array']->value['iteration'] : null));
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_2_3_recent_orders']) ? $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list_tabs']['content'][$_smarty_tpl->tpl_vars['status_index']->value]['id'] = "analytics_card_recent_orders_tab_".((string)(mb_strtolower($_smarty_tpl->tpl_vars['status']->value['status'], 'UTF-8')));
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_tmp_array);
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_2_3_recent_orders']) ? $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list_tabs']['content'][$_smarty_tpl->tpl_vars['status_index']->value]['title'] = $_smarty_tpl->tpl_vars['status']->value['description'];
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_tmp_array);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value[$_smarty_tpl->tpl_vars['status']->value['status']], 'order', false, NULL, 'orders_array', array (
));
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
ob_start();
$_smarty_tpl->_subTemplateRender("tygh:common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('value'=>$_smarty_tpl->tpl_vars['order']->value['total']), 0, true);
$_smarty_tpl->assign('order_total_price', ob_get_clean());
ob_start();
echo $_smarty_tpl->__("order");
$_prefixVariable11=ob_get_clean();
$_smarty_tpl->_assignInScope('tab_content', array('id'=>$_smarty_tpl->tpl_vars['order']->value['order_id'],'name'=>$_prefixVariable11." #".((string)$_smarty_tpl->tpl_vars['order']->value['order_id']),'value'=>$_smarty_tpl->tpl_vars['order_total_price']->value,'href'=>"orders.details?order_id=".((string)$_smarty_tpl->tpl_vars['order']->value['order_id']),'description'=>((string)$_smarty_tpl->tpl_vars['order']->value['lastname'])." ".((string)$_smarty_tpl->tpl_vars['order']->value['firstname']),'small_text'=>smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value['timestamp'],((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']).", ".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['time_format'])),'label_id'=>mb_strtolower($_smarty_tpl->tpl_vars['order']->value['status'], 'UTF-8'),'label_text'=>$_smarty_tpl->tpl_vars['order_statuses']->value[$_smarty_tpl->tpl_vars['order']->value['status']]['description'],'label_class'=>"o-status-".((string)(mb_strtolower($_smarty_tpl->tpl_vars['order']->value['status'], 'UTF-8')))));
if ($_smarty_tpl->tpl_vars['order']->value['user_id']) {
$_tmp_array = isset($_smarty_tpl->tpl_vars['tab_content']) ? $_smarty_tpl->tpl_vars['tab_content']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['description_href'] = "profiles.update?user_id=".((string)$_smarty_tpl->tpl_vars['order']->value['user_id']);
$_smarty_tpl->_assignInScope('tab_content', $_tmp_array);
}
$_tmp_array = isset($_smarty_tpl->tpl_vars['data_2_3_recent_orders']) ? $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['resource_list_tabs']['content'][$_smarty_tpl->tpl_vars['status_index']->value]['content'][] = $_smarty_tpl->tpl_vars['tab_content']->value;
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_tmp_array);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('data_2_3_recent_orders', $_smarty_tpl->tpl_vars['data_2_3_recent_orders']->value ,false ,2);
}
}
}
