<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:54:26
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9ead2391dd1_41002997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '892958fe62a61a8f2442410fd80c6e2224219759' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/yml_export/hooks/product_features/variants_list_clone.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9ead2391dd1_41002997 (Smarty_Internal_Template $_smarty_tpl) {
?><td>
    <input type="text" name="feature_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_unit]" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['var']->value['yml2_unit'], ENT_QUOTES, 'UTF-8');?>
" class="span2">
</td>
<?php }
}
