<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:55:44
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/addons/components/manage/addon_install_datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9eb20292299_72032431',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfad143c89283ac16143b0b708d6a4de2d4785f7' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/addons/components/manage/addon_install_datetime.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9eb20292299_72032431 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('show_install_datetime', (($tmp = $_smarty_tpl->tpl_vars['show_install_datetime']->value ?? null)===null||$tmp==='' ? true ?? null : $tmp));
if ($_smarty_tpl->tpl_vars['show_install_datetime']->value) {?>
        <div class="hidden"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['a']->value['install_datetime'], ENT_QUOTES, 'UTF-8');?>
</div>
<?php }
}
}
