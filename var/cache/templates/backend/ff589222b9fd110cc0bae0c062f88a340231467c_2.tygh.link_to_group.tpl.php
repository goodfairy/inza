<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:55:01
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/views/product_variations/components/link_to_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9eaf52479d3_01745528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff589222b9fd110cc0bae0c062f88a340231467c' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/views/product_variations/components/link_to_group.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9eaf52479d3_01745528 (Smarty_Internal_Template $_smarty_tpl) {
\Tygh\Languages\Helper::preloadLangVars(array('product_variations.group_code.link','none','none'));
?>
<div class="object-picker__simple object-picker__simple--variation-group input-xlarge">
    <input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="product_id">
    <select id="product_variations_code"
        class="cm-object-picker object-picker__select product-variations__toolbar-code-link"
        name="group_id"
        data-ca-object-picker-placeholder="<?php echo $_smarty_tpl->__("product_variations.group_code.link");?>
"
    >
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_codes']->value, 'group_code', false, 'group_id');
$_smarty_tpl->tpl_vars['group_code']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group_id']->value => $_smarty_tpl->tpl_vars['group_code']->value) {
$_smarty_tpl->tpl_vars['group_code']->do_else = false;
?>
            <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group_code']->value, ENT_QUOTES, 'UTF-8');?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <option value="">-<?php echo $_smarty_tpl->__("none");?>
-</option>
    </select>
</div><?php }
}
