<?php
/* Smarty version 4.1.1, created on 2024-02-27 23:37:43
  from '/home/c/cw39500/inz/public_html/design/backend/templates/views/block_manager/components/existing_blocks_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.1',
  'unifunc' => 'content_65de48178bf7f3_85366518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dfb799d4e83b4503467fb7cf1e3df72851372065' => 
    array (
      0 => '/home/c/cw39500/inz/public_html/design/backend/templates/views/block_manager/components/existing_blocks_list.tpl',
      1 => 1701074534,
      2 => 'tygh',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65de48178bf7f3_85366518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/c/cw39500/inz/public_html/app/lib/vendor/smarty/smarty/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),1=>array('file'=>'/home/c/cw39500/inz/public_html/app/functions/smarty_plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
\Tygh\Languages\Helper::preloadLangVars(array('delete_block'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['unique_blocks']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['block_types']->value[$_smarty_tpl->tpl_vars['block']->value['type']]) {?>
        <div class="select-block <?php if ($_smarty_tpl->tpl_vars['purpose']->value === "wysiwyg") {?>cm-select-bm-block<?php } else { ?>cm-add-block bm-action-existing-block<?php }?> <?php if ($_smarty_tpl->tpl_vars['manage']->value == "Y") {?>bm-manage<?php }?> <?php if ($_smarty_tpl->tpl_vars['block']->value['single_for_location']) {?>bm-block-single-for-location<?php }?>"
             data-ca-block-uid="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['unique_id'], ENT_QUOTES, 'UTF-8');?>
"
             data-ca-block-name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
        >
            <input type="hidden" name="block_id" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="grid_id" value="<?php echo htmlspecialchars((string) (($tmp = $_smarty_tpl->tpl_vars['grid_id']->value ?? null)===null||$tmp==='' ? "0" ?? null : $tmp), ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="type" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['type'], ENT_QUOTES, 'UTF-8');?>
" />
            <?php if ($_smarty_tpl->tpl_vars['purpose']->value !== "wysiwyg") {?>
                <a class="icon-remove-circle cm-tooltip cm-remove-block" title="<?php echo $_smarty_tpl->__("delete_block");?>
"></a>
            <?php }?>
            <div class="select-block-box">
                <div class="bmicon-<?php echo htmlspecialchars((string) smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"></div>
            </div>
            <div class="select-block-description">
                <strong title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_replace(htmlspecialchars((string)smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],20,"...",true), ENT_QUOTES, 'UTF-8', true),'...','&hellip;');?>
</strong>
                <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['block_types']->value[$_smarty_tpl->tpl_vars['block']->value['type']]['description'], ENT_QUOTES, 'UTF-8');?>
</p>
            </div>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
