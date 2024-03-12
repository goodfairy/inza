<?php
/* Smarty version 4.1.1, created on 2024-02-12 13:54:51
  from '/home/c/cw39500/inz/public_html/design/backend/templates/common/sidebox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9f8fb45db35_24782692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90c7393bd02cc3bfa73f3976b8f0310bb0121943' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/common/sidebox.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9f8fb45db35_24782692 (Smarty_Internal_Template $_smarty_tpl) {
if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <div class="sidebar-row">
        <h6><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
</h6>
        <?php echo (($tmp = $_smarty_tpl->tpl_vars['content']->value ?? null)===null||$tmp==='' ? "&nbsp;" ?? null : $tmp);?>

    </div>
    <hr />
<?php }
}
}
