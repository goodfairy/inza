<?php
/* Smarty version 4.1.1, created on 2024-02-14 14:57:19
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/gift_certificates/hooks/profiles/update_tools_list.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65ccaa9fd13e59_85563928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9fb69673d81dca331e9e6f93a59d034af82ecac' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/gift_certificates/hooks/profiles/update_tools_list.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65ccaa9fd13e59_85563928 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('create_gift_certificate_for_customer'));
if ($_smarty_tpl->tpl_vars['user_data']->value['user_type'] == "C" && fn_check_view_permissions("gift_certificates.add")) {?>
    <li><a class="tool-link" href="<?php echo htmlspecialchars((string) fn_url("gift_certificates.add?user_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("create_gift_certificate_for_customer");?>
</a></li>
<?php }
}
}
