<?php
/* Smarty version 4.1.1, created on 2024-03-02 23:05:04
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/hooks/products/update_fields_item.override.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65e38670d2b5b5_46477149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0447bcf84e2376d3e27dcd0709bdd2ed5456b4ab' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/product_variations/hooks/products/update_fields_item.override.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
    'tygh:addons/product_variations/views/product_variations/components/variation_features.tpl' => 1,
  ),
),false)) {
function content_65e38670d2b5b5_46477149 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['product']->value['variation_features'] && $_smarty_tpl->tpl_vars['field']->value === "product") {?>
    <tr>
        <td valign="top" class="nowrap pad strong"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['v']->value[$_smarty_tpl->tpl_vars['field']->value], ENT_QUOTES, 'UTF-8');?>
:&nbsp;</td>
        <td valign="top" class="pad nowrap">
            <?php if ($_smarty_tpl->tpl_vars['product']->value['parent_product_id']) {?>
                <div><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
</div>
                <input
                    type="hidden"
                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]"
                />
            <?php } else { ?>
                <input 
                    type="text"
                    value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product'], ENT_QUOTES, 'UTF-8');?>
"
                    class="input-medium input--no-margin"
                    name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['product_id'], ENT_QUOTES, 'UTF-8');?>
][product]"
                />
            <?php }?>
            <div>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['variation_features']) {?>
                    <?php $_smarty_tpl->_subTemplateRender("tygh:addons/product_variations/views/product_variations/components/variation_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variation_features'=>$_smarty_tpl->tpl_vars['product']->value['variation_features'],'features_inline'=>true,'features_mini'=>true,'features_secondary'=>true), 0, false);
?>
                <?php }?>
            </div>
        </td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['product']->value['type']->isFieldAvailable($_smarty_tpl->tpl_vars['field']->value)) {?>
    <!-- Overridden by the Product Variations add-on -->
<?php }
}
}
