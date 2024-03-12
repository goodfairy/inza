<?php
/* Smarty version 4.1.1, created on 2024-02-12 12:54:38
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/yml_export/hooks/product_options/properties.post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65c9eadedd0e59_83382550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'edcdadd8456d7f1a7c425d1dc4fe1c68a38cf593' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/yml_export/hooks/product_options/properties.post.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65c9eadedd0e59_83382550 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/function.script.php','function'=>'smarty_function_script',),));
\Tygh\Languages\Helper::preloadLangVars(array('yml2_type_options','yml2_type_option_param'));
echo smarty_function_script(array('src'=>"js/addons/yml_export/ym_options.js"),$_smarty_tpl);?>

<div class="control-group">
    <label class="control-label" for="elm_option_yml2_type_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("yml2_type_options");?>
</label>
    <div class="controls">
        <select id="elm_option_yml2_type_options_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" name="option_data[yml2_type_options]" class="cm-ym-option-select" data-option-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            <option value="" <?php if (empty($_smarty_tpl->tpl_vars['option_data']->value['yml2_type_options'])) {?>selected="selected"<?php }?>>--</option>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml2_options']->value, 'option', false, 'code');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['yml2_type_options'] == $_smarty_tpl->tpl_vars['code']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </select>
    </div>
</div>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['yml2_options']->value, 'option', false, 'option_key');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option_key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['option']->value['types'])) {?>
    <div class="control-group ym-option" id="ym_option_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['yml2_type_options'] != $_smarty_tpl->tpl_vars['option_key']->value) {?> style="display: none"<?php }?>>
        <label class="control-label" for="elm_option_yml2_option_param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("yml2_type_option_param");?>
</label>
        <div class="controls">
            <select id="elm_option_yml2_option_param_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_key']->value, ENT_QUOTES, 'UTF-8');?>
" name="option_data[yml2_option_param]" class="cm-ym-option-type-select" data-option-id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_key']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['yml2_type_options'] != $_smarty_tpl->tpl_vars['option_key']->value) {?>disabled="disabled"<?php }?>>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['types'], 'name_type', false, 'type');
$_smarty_tpl->tpl_vars['name_type']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['name_type']->value) {
$_smarty_tpl->tpl_vars['name_type']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option_data']->value['yml2_option_param'] == $_smarty_tpl->tpl_vars['type']->value) {?>selected="selected"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['name_type']->value, ENT_QUOTES, 'UTF-8');?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_smarty_tpl->tpl_vars['option']->value['customer_type']) {?>
                    <option value="customer" <?php if (!empty($_smarty_tpl->tpl_vars['option_data']->value['yml2_option_param']) && !array_key_exists($_smarty_tpl->tpl_vars['option_data']->value['yml2_option_param'],$_smarty_tpl->tpl_vars['option']->value['types'])) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__('yml2_option_type_customer');?>
</option>
                <?php }?>
            </select>
            <?php if ($_smarty_tpl->tpl_vars['option']->value['customer_type']) {?>
                <input type="text" name="option_data[yml2_option_param]" id="elm_yml2_option_param_input_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_key']->value, ENT_QUOTES, 'UTF-8');?>
" size="10" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['option_data']->value['yml2_option_param'], ENT_QUOTES, 'UTF-8');?>
" class="input-long option_param_input"
                        <?php if (empty($_smarty_tpl->tpl_vars['option_data']->value['yml2_option_param']) || array_key_exists($_smarty_tpl->tpl_vars['option_data']->value['yml2_option_param'],$_smarty_tpl->tpl_vars['option']->value['types'])) {?> disabled="disabled" style="display: none;"<?php }?>/>
            <?php }?>
        </div>
    </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
