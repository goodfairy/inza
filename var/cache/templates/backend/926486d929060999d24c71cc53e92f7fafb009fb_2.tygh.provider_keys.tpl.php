<?php
/* Smarty version 4.1.1, created on 2024-02-27 15:53:42
  from '/home/c/cw39500/inz/public_html/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/provider_keys.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65dddb567206f2_71561286',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '926486d929060999d24c71cc53e92f7fafb009fb' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/addons/hybrid_auth/views/hybrid_auth/provider_keys.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dddb567206f2_71561286 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="content_keys_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
    
    <?php if ($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['instruction']) {?>
    <div class="control-group">
        <div class="controls">
            <div class="alert alert-block hybrid-auth-instruction">
                <?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['instruction']);?>

            </div>
        </div>
    </div>
    <?php }?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['providers_schema']->value[$_smarty_tpl->tpl_vars['provider']->value]['keys'], 'key', false, 'key_id');
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key_id']->value => $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
?>
        <div class="control-group">
            <label for="section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label<?php if ($_smarty_tpl->tpl_vars['key']->value['required']) {?> cm-required<?php }?>"><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['key']->value['label']);?>
:</label>
            <div class="controls">
                <input type="text" name="provider_data[<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key']->value['db_field'], ENT_QUOTES, 'UTF-8');?>
]" size="30" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['provider_data']->value[$_smarty_tpl->tpl_vars['key']->value['db_field']], ENT_QUOTES, 'UTF-8');?>
" id="section_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['key_id']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
">
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!--content_keys_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
--></div><?php }
}
