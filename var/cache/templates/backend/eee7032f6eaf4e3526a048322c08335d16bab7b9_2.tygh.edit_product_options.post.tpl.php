<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:54:38
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/yml_export/hooks/product_options/edit_product_options.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9eadee35d53_85817360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eee7032f6eaf4e3526a048322c08335d16bab7b9' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/yml_export/hooks/product_options/edit_product_options.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9eadee35d53_85817360 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('yml_export.yml2_option_variant'));
?>
<div class="control-group cm-non-cb">
    <label class="control-label"><?php echo $_smarty_tpl->__("yml_export.yml2_option_variant");?>
</label>
    <div class="controls">
        <input type="text" name="option_data[variants][<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['num']->value, ENT_QUOTES, 'UTF-8');?>
][yml2_variant]" value="<?php if (!empty($_smarty_tpl->tpl_vars['vr']->value['yml2_variant'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['vr']->value['yml2_variant'], ENT_QUOTES, 'UTF-8');
}?>" class="input-medium" />
    </div>
</div>
<?php }
}
