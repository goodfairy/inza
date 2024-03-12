<?php
/* Smarty version 4.1.1, created on 2024-02-12 08:12:53
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/help_center/hooks/menu/notification_center_mobile.pre.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9a8d5df5c02_87448604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cf7cc01733a7abb09079e98b1c2f272aec56043' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/help_center/hooks/menu/notification_center_mobile.pre.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/help_center/component/help_center_popup_btn_mobile.tpl' => 1,
  ),
),false)) {
function content_65c9a8d5df5c02_87448604 (Smarty_Internal_Template $_smarty_tpl) {
if ((defined('ACCOUNT_TYPE') ? constant('ACCOUNT_TYPE') : null) === "admin") {?>
    <li class="dropdown dropdown-top-menu-item cm-dropdown-skip-processing help-center-menu-mobile">
        <?php $_smarty_tpl->_subTemplateRender("tygh:addons/help_center/component/help_center_popup_btn_mobile.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </li>
<?php }
}
}
